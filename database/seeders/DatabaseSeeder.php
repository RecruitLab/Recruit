<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Departments;
use App\Models\JobOpenings;
use App\Models\User;
use Closure;
use Database\Seeders\concerns\ProgressBarConcern;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Symfony\Component\Console\Helper\ProgressBar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use ProgressBarConcern;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Permissions
        $this->command->warn(PHP_EOL . 'Creating set of permission for roles...');
        $arrayOfPermissionNames = ['Add Role', 'Delete Role', 'Add User', 'Delete User', 'View User', 'View Role', 'View Profile', 'View Permissions'];
        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });
        $this->withProgressBar(1, fn () => Permission::insert($permissions->toArray()));
        $this->command->info('Sets of permissions has been created.');

        // Roles
        $this->command->warn(PHP_EOL . 'Creating super admin role...');
        $this->withProgressBar(1, fn () => Role::create(['name' => 'SUPER_USER'])->givePermissionTo(Permission::all()));
        $this->command->info('Super admin role has been created.');


        // Admin
        $this->command->warn(PHP_EOL . 'Creating admin user...');
        $user_admin = $this->withProgressBar(1, fn () => User::factory(1)->create([
            'name' => 'Super Admin',
            'email' => 'superuser@mail.com',
        ]));
        $this->command->info('Admin user created.');

        // Assigning Role to Admin
        $this->command->warn(PHP_EOL . 'Assigning admin role to user...');
        $this->withProgressBar(1, fn() => $user_admin->first()->assignRole('SUPER_USER'));
        $this->command->info('Admin role assigned.');

        // Departments
        $this->command->warn(PHP_EOL . 'Creating Departments...');
        $departments = $this->withProgressBar(5, fn () => Departments::factory(1)->create([
            'ParentDepartment' => null
        ]));
        $this->command->info('Departments created.');

        // Job Openings
        $this->command->warn(PHP_EOL . 'Creating Job Openings...');
        $jobOpenings = $this->withProgressBar(15, fn () => JobOpenings::factory(1)->create([
            'CreatedBy' => $user_admin->first()->id,
            'Status' => 'Opened',
        ]));
        $this->command->info('Job Openings created.');


    }

}
