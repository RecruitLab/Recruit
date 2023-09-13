<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if ($favicon = filament()->getFavicon())
        <link rel="icon" href="{{ $favicon }}" />
    @endif
    <title>
        {{ filled($title = strip_tags($title) ? "{$title} - " : null }}
        {{ filament()->getBrandName() }}
    </title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @filamentStyles
    @vite('resources/css/app.css')
    @vite('resources/css/career.css')
    @vite('resources/css/career-job-post.css')
</head>

<body class="antialiased">
@livewire('notifications')
{{ $slot }}

@filamentScripts
@vite('resources/js/app.js')
</body>
</html>
