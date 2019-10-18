<!DOCTYPE html>
<html lang="pl">

<head>
    <title>{{ $pageTitle ?? '' }}@if(isset($pageTitle)) - @endif{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- TODO -->
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- CSS styles -->
    <link rel="stylesheet" href="{{ asset('css/website.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">

    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#00ad75">

</head>

<body style="overflow-x: hidden; position: relative; padding-top: 76px" data-spy="scroll" data-target=".navbar" data-offset="70">

@include('layouts.include.website-header-not-on-mobile')

<div class="container" id="app">
    @yield('content')
</div>

@include('layouts.include.website-footer')

<!-- JS Libs -->
<script src="{{ asset('js/website.js') }}"></script>
<script src="{{ asset('js/ordering.js') }}"></script>

@stack('scripts')
<script>
    console.log('This page took {{ (microtime(true) - LARAVEL_START) }} seconds to render');
</script>

</body>
</html>
