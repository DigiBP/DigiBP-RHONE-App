@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="font-bold text-xl">  {{ __('app/diabetis.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/diabetis.subtitle') }}</div>

            <form class="mt-6" method="POST" action="{{ route('diabetis.update') }}">
                @csrf

                <div class="flex flex-wrap mb-6">
                    <label for="education" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/application.demography.education.question') }}
                    </label>

                    <select id="education" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           name="education" required autofocus>
                        <option>{{ __('app/application.demography.please_select') }}</option>
                        @foreach( __('app/application.demography.education.answers') as $answer)
                            <option>{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('education')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="employment" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/application.demography.employment.question') }}
                    </label>

                    <select id="employment" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="employment" required autofocus>
                        <option>{{ __('app/application.demography.please_select') }}</option>
                        @foreach( __('app/application.demography.employment.answers') as $answer)
                            <option>{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('employment')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="digital_apps" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/application.demography.digital_apps.question') }}
                    </label>

                    <select id="digital_apps" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="digital_apps" required autofocus>
                        <option>{{ __('app/application.demography.please_select') }}</option>
                        @foreach( __('app/application.demography.digital_apps.answers') as $answer)
                            <option>{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('digital_apps')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="social_media" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/application.demography.social_media.question') }}
                    </label>

                    <select id="social_media" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="social_media" required autofocus>
                        <option>{{ __('app/application.demography.please_select') }}</option>
                        @foreach( __('app/application.demography.social_media.answers') as $answer)
                            <option>{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('social_media')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="patient_communities" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/application.demography.patient_communities.question') }}
                    </label>

                    <select id="patient_communities" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="patient_communities" required autofocus>
                        <option>{{ __('app/application.demography.please_select') }}</option>
                        @foreach( __('app/application.demography.patient_communities.answers') as $answer)
                            <option>{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('patient_communities')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="nutrition" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/application.demography.nutrition.question') }}
                    </label>

                    <select id="nutrition" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="nutrition" required autofocus>
                        <option>{{ __('app/application.demography.please_select') }}</option>
                        @foreach( __('app/application.demography.nutrition.answers') as $answer)
                            <option>{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('nutrition')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="mobility" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/application.demography.mobility.question') }}
                    </label>

                    <select id="mobility" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="mobility" required autofocus>
                        <option>{{ __('app/application.demography.please_select') }}</option>
                        @foreach( __('app/application.demography.mobility.answers') as $answer)
                            <option>{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('mobility')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap items-center">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('app/application.form.button') }}
                    </button>
                </div>
            </form>

        </div>
    </div>

    @include('layouts.partials.footer')

@endsection
