<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <meta name="description" content="Technical test for Paymedy">

        <link rel="preconnect" href="https://rsms.me">
        <link rel="preload" href="https://rsms.me/inter/inter.css" as="style">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url(asset('apple-touch-icon.png')) }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url(asset('favicon-32x32.png')) }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url(asset('favicon-16x16.png')) }}">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')
    </body>
</html>
