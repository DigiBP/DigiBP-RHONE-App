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

<script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/afa3a8630af76534c272bb8e9f9024e088b6abd89beda4107cd88be7dc477ba4.js"></script>
</body>
</html>
