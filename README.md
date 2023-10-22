:construction: This project is under hard development and not yet ready for production :construction:
<p align="center"><img src="https://github.com/OSSAdmiral/.github/blob/c325ef79481c1b02d675f71247d4f8131d0496fa/Profile/Admiral%20(OSS)%20%20743x360.png" width="400" alt="Admiral OSS"></p>

[![Laravel](https://img.shields.io/badge/Laravel-v10-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://img.shields.io/badge/Laravel-v10-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
[![PHP](https://img.shields.io/badge/PHP-v8.1-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://img.shields.io/badge/PHP-v8.1-777BB4?style=for-the-badge&logo=php&logoColor=white)
[![FilamentPhp ](https://img.shields.io/badge/Filamentphp-v3.x-yellow?style=for-the-badge&logo=filamentphp)](https://img.shields.io/badge/PHP-8.0-777BB4?style=for-the-badge&logo=php)
![GitHub Workflow Status (with event)](https://img.shields.io/github/actions/workflow/status/RecruitLab/Recruit/run-tests.yml?style=for-the-badge&logo=GitHub&label=Test%20Case)
![GitHub Workflow Status (with event)](https://img.shields.io/github/actions/workflow/status/RecruitLab/Recruit/fix-php-code-style-issues.yml?event=pull_request&style=for-the-badge&logo=GitHub&label=Code%20Style)
![GitHub](https://img.shields.io/github/license/RecruitLab/Recruit?style=for-the-badge&label=License)


# Installation

You can install the dependency package via composer and NPM:

```bash
composer install
```
```bash
npm install && npm run build
```

Create symbolic link from your public/storage
```bash
php artisan storage:link
```

Run Database Migration
```bash
php artisan migrate
```

Run Database Seeder to populate the database
```bash
php artisan db:seed
```

Generate Permissions 
```bash
php artisan permissions:sync -C -Y
```


if you experience slow loading, run this
```bash
php artisan icons:cache
```



# Pre-defined Access Credentials

###### SUPER USER
```
superuser@mail.com
password
```

> **Notes For Roles**
> 
> `Super Admin` - All permission is granted
> 
>`Admin` - All permission is granted, but not including the following:
>   - Impersonating user
> 
> `Standard` - All permission is granted, but not including the following permissions.
>  - delete
>  - restore

## About RecruitLab

RecruitLab is a web application System with rich feature.

## Contributing

Thank you for considering contributing to the RecruitLab-Recruit.

## Code of Conduct

In order to ensure that the RecruitLab community is welcoming to all, please review and abide by the [Code of Conduct](#).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail us. All security vulnerabilities will be promptly addressed.

## License

The RecruitLab-Recruit  is open-sourced software licensed under the [GNU AGPLv3](https://choosealicense.com/licenses/agpl-3.0/).
