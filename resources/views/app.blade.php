<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Bouff') }}</title>

    <link rel="shortcut icon" href="{{asset('assets/svg/bouff_logo_short.svg')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/svg/bouff_logo_short.svg')}}">
    <link href="{{asset('assets/webfonts/uicons-solid-rounded.css')}}" rel="stylesheet">

    <!-- Scripts -->
    {{-- @laravelPWA --}}
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<style>
    ::-webkit-scrollbar {
        width: 0px;
        height: 0px;
    }
</style>

<body class="font-sans antialiased">
    @inertia
</body>

</html>