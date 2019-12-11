@extends('layouts.start')

@section('styles')

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8a4c933e7.js" crossorigin="anonymous"></script>

    <style>
        .gradient {
            background: linear-gradient(90deg, #d51931 0%, #dad9ca 100%);
        }
    </style>

@endsection

@section('content')
    <body class="leading-normal tracking-normal text-white gradient"
          style="font-family: 'Source Sans Pro', sans-serif;">
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">{{ __('app/start.subtitle') }}</p>
                <h1 class="text-5xl font-bold leading-tight">{{ __('app/start.title') }}</h1>
                <p class="leading-normal text-2xl mb-8">{{ __('app/start.paragraph') }}</p>
                <a href="{{ route('registration.index') }}"
                   class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full py-4 px-8 shadow-lg">{{ __('app/start.button') }}</a>
            </div>
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50" src="{{ asset('images/personas/markus.png') }}">
            </div>
        </div>
    </div>
    </body>
@endsection


@section('scripts')
@endsection
