@extends('layouts.default')

@section('styles')
@endsection

@section('content')
    <div class="md:w-1/2 md:mx-auto mt-24">

        <div class="p-6">
            <div class="font-bold text-xl">  {{ __('app/registration.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/registration.subtitle') }}</div>

            @if(flash()->message)
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mt-6"
                     role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">  {{ flash()->message }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <form class="mt-5" method="POST" action="{{ route('registration.store') }}">
                @csrf
                @honeypot

                <div class="flex flex-wrap mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/registration.form.email') }}
                    </label>

                    <input id="email" type="email" placeholder="{{ __('app/registration.form.email') }}"
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
                        {{ __('app/registration.form.birthdate') }} <span class="text-xs font-light ml-1">{{ __('app/registration.form.birthdate_format') }}</span>
                    </label>

                    <input id="birthdate" type="text"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                           name="birthdate" value="{{ old('birthdate') }}" placeholder="{{ $minimum_age }}" required>

                    @error('birthdate')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex mb-6">
                    <input class="mt-1" type="checkbox" name="confirmed_diagnosis" id="confirmed_diagnosis"
                           {{ old('confirmed_diagnosis') ? 'checked' : '' }} required>

                    <label class="text-sm text-gray-700 ml-2" for="confirmed_diagnosis">
                        {{ __('app/registration.form.confirmed_diagnosis') }}
                    </label>
                    <a target="_blank" class="underline text-sm text-blue-700 ml-1" href="{{ route('diagnosis.index') }}"><span class="text-xs">{{ __('app/registration.form.more_information') }}</span></a>
                </div>

                <div class="flex flex-wrap items-center">
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('app/registration.form.button') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection


@section('scripts')
@endsection
