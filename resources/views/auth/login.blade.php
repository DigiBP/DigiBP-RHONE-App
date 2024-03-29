@extends('layouts.default')

@section('content')

    <div class="container mx-auto mt-48">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        {{ __('auth/login.title') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('auth/login.form.email') }}
                            </label>

                            <input id="email" type="email" placeholder="{{ __('auth/login.form.email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('auth/login.form.password') }}
                            </label>

                            <input id="password" type="password" placeholder="{{ __('auth/login.form.password') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required>

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex mb-6">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-sm text-gray-700 ml-3" for="remember">
                                {{ __('auth/login.form.remember_me') }}
                            </label>
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('auth/login.form.button') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-red-500 hover:text-red-700 whitespace-no-wrap no-underline ml-auto" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                            <span class="ml-2 mr-2 text-sm text-gray-500 whitespace-no-wrap">|</span>
                            <a class="text-sm text-red-500 hover:text-red-700 whitespace-no-wrap no-underline " href="{{ route('start.index') }}">
                                {{ __('Start') }}
                            </a>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
