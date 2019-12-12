<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>{{ config('app.name') }}</title>
    <meta name="author" content="Sebastian Fix">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body class="">
@yield('content')

@include('layouts.partials.footer')

@yield('scripts')

</body>
</html>
