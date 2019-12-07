@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/botman-widget.css') }}">
@endsection

@section('content')
    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">
            <div class="font-bold text-xl mb-2">  {{ __('app/start.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/start.subtitle') }}</div>

            <form class="mt-6" method="POST" action="{{ route('registration.store') }}">
                @csrf

                <div class="flex flex-wrap mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/start.form.email') }}
                    </label>

                    <input id="email" type="email" placeholder="{{ __('app/start.form.email') }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="birthdate" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/start.form.birthdate') }}
                    </label>

                    <input id="birthdate" type="text" placeholder="{{ __('app/start.form.birthdate') }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                           name="birthdate" required>

                    @error('birthdate')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex mb-6">
                    <input type="checkbox" name="confirmed_diagnosis" id="confirmed_diagnosis" {{ old('confirmed_diagnosis') ? 'checked' : '' }} required>

                    <label class="text-sm text-gray-700 ml-3" for="confirmed_diagnosis">
                        {{ __('app/start.form.confirmed_diagnosis') }}
                    </label>
                </div>

                <div class="flex flex-wrap items-center">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('app/start.form.button') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.partials.footer')

@endsection


@section('scripts')

    {{--    <script src='{{ asset('js/botman-widget-min.js') }}'></script>


      <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
                       onclick="botmanChatWidget.open()">
                        Start registration
                    </a>


        <script>
            var botmanWidget = {
                title: "Registration",
                aboutText: '(c) Sebastian Fix',
                introMessage: 'Dear Patient, enter "Start" to begin with the registration process.',
                displayMessageTime: true,
                mainColor: '#edf2f8',
                bubbleBackground: '#edf2f8',
                bubbleAvatarUrl: '{{ $register_icon }}',
                desktopHeight: 500,
                desktopWidth: 500,
                aboutLink: 'https://www.onicial.ch'
            };
        </script>--}}


@endsection
