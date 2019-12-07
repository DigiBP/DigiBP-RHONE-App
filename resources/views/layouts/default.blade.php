<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="">
@yield('content')


@yield('scripts')

</body>
</html>
