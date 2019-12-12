<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>{{ config('app.name') }}</title>
    <meta name="author" content="Sebastian Fix">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8a4c933e7.js" crossorigin="anonymous"></script>
    @yield('styles')
</head>
<body class="">
@yield('content')

@include('layouts.partials.footer')

@yield('scripts')

</body>
</html>
