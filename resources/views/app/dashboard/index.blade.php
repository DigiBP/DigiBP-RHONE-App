@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="text-gray-900 tracking-tight mb-2">
                <span class="text-5xl font-bold ">{{ __('app/dashboard.welcome') }}</span>
                @if($user->name)
                    <span class="ml-2 text-2xl font-light">{{ $user->name }}</span>
                @endif
            </div>


            <div class="font-bold text-xl">  {{ __('app/dashboard.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/dashboard.subtitle') }}</div>

            <div class="mt-2">

                <form class="mt-6" method="POST" action="{{ route('profile.update') }}">
                    @csrf

                    <div class="flex flex-wrap mb-6">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('app/dashboard.form.name') }}
                        </label>

                        <input id="name" type="text" placeholder="{{ __('app/dashboard.form.name') }}"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                               name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap items-center">
                        <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('app/dashboard.form.button') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @include('layouts.partials.footer')


@endsection
