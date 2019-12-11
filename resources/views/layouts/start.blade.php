<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>{{ config('app.name') }}</title>
    <meta name="author" content="Sebastian Fix">

    @yield('styles')
</head>
@yield('content')
@yield('scripts')
</html>
