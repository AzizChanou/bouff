<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Bouff') }}</title>


    <link rel="shortcut icon" href="/storage/assets/bouff_logo_short.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="/storage/assets/bouff_logo_short.svg">
    <link href="{{asset('webfonts/uicons-solid-rounded.css')}}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<style>
    ::-webkit-scrollbar {
        width: 0rem;
    }

    * {
        border-width: 0px;
    }
</style>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
