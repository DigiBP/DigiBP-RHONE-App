<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>{{ config('app.name') }}</title>
    <meta name="author" content="Sebastian Fix">
    {{--<link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/backup.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body class="">

<div class="flex items-center bg-red-500 text-white text-xs font-light uppercase px-4 py-2" role="alert">
    <div class="md:w-1/2 md:mx-auto">
        <p>{{ __('app/layouts.demo') }}</p>
    </div>
</div>

@yield('content')

@include('layouts.partials.footer')

@yield('scripts')

</body>
</html>
