@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="text-gray-900 tracking-tight mb-2">
                <span class="text-3xl font-bold ">{{ __('app/dashboard.welcome') }}</span>
                @if($user->patient->name)
                    <span class="ml-2 text-3xl font-light">{{ $user->patient->name }}</span>
                @endif
            </div>


            @if(!$user->patient->name)
            <div class="font-bold text-xl">  {{ __('app/dashboard.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/dashboard.subtitle') }}</div>

            <div class="mt-2">

                <form class="" method="POST" action="{{ route('profile.update') }}">
                    @csrf

                    <div class="flex flex-wrap mb-2">
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
            @else

                <div class="font-bold text-xl">  {{ __('app/dashboard.title') }}</div>

                <div class="flex flex-wrap mt-6 mb-6">

                    <div class="w-full md:w-1/2 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                            {{ __('app/application.form.name') }}
                        </label>
                        <input value="{{ $user->patient->name }}"
                               class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               type="text" disabled>
                    </div>

                        <div class="w-full md:w-1/2 px-3">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
                                {{ __('app/application.form.gender') }}
                                <a target="_blank" href="https://gender-api.com" class="text-xs font-light text-blue-500 ml-1">(Gender API Service)</a>
                                @if($user->patient->gender != \App\Models\Patient::GENDER_DIVERSE)
                                    <a title="Switch Gender" href="{{ route('application.gender', $user->patient) }}" class="text-xs font-light ml-1"><i class="fal fa-repeat"></i></a>
                                @endif
                            </label>
                            <input value="{{ $user->patient->gender }}"
                                   class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   type="text" disabled>
                        </div>

                    <div class="w-full md:w-1/2 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                            {{ __('app/application.form.birthdate') }}
                        </label>
                        <input value="{{ $user->patient->birthdate }}"
                               class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               type="text" disabled>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
                            {{ __('app/application.form.age') }}
                        </label>
                        <input value="{{ $user->patient->getAge() }}"
                               class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               type="text" disabled>
                    </div>

                </div>
            @endif

            @if(config('digibp.applications_enabled') && $user->patient->name)
                <div class="mt-6">
                    <div class="font-bold text-xl">  {{ __('app/dashboard.application.title') }}</div>
                    <div class="font-light text-lg mb-2">  {{ __('app/dashboard.application.subtitle') }}</div>

                    <div class="flex flex-wrap items-center mb-2">

                        <span class="mr-1"><i class="fal fa-check-circle text-green-700"></i></span>

                        <a href="{{ route('application.index') }}"
                           class="bg-white text-gray-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Pg1-Demographics
                        </a>
                    </div>

                    <div class="flex flex-wrap items-center mb-2">

                        <span class="mr-1"> <i class="fal fa-times-circle text-red-900"></i></span>

                        <a href="{{ route('application.index') }}"
                           class="bg-white text-gray-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Pg 2 -Medical History
                        </a>
                    </div>

                    <div class="flex flex-wrap items-center mb-2">

                        <span class="mr-1"> <i class="fal fa-times-circle text-red-900"></i></span>

                        <a href="{{ route('application.index') }}"
                           class="bg-white text-gray-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Pg 3 -SDSCA Measure
                        </a>
                    </div>

                    <div class="flex flex-wrap items-center mb-2">

                        <span class="mr-1"><i class="fal fa-circle"></i></span>

                        <a href="{{ route('application.index') }}"
                           class="bg-white text-gray-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Pg 4 -Diabetes Quality of Life
                        </a>
                    </div>

                    <div class="flex flex-wrap items-center">
                        <a href="{{ route('application.index') }}"
                                class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('app/dashboard.application.button') }}
                        </a>
                    </div>

                </div>
            @endif


        </div>
    </div>

    @include('layouts.partials.footer')


@endsection
