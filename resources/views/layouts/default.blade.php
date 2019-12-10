<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8a4c933e7.js" crossorigin="anonymous"></script>
    @yield('styles')
</head>
<body class="">
@yield('content')


@yield('scripts')

</body>
</html>
