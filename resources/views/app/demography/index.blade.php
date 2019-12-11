@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="font-bold text-xl">  {{ __('app/demography.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/demography.subtitle') }}</div>

            <form class="mt-6" method="POST" action="{{ route('application.demography.update', $user->patient) }}">
                @csrf

                <div class="flex flex-wrap mb-6">
                    <label for="education" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('app/demography.education.question') }}
                    </label>

                    <select id="education" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           name="education"  autofocus required>
                        <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>
                        @foreach( __('app/demography.education.answers') as $answer)
                            <option @if(old('education', $user->patient->application->demography_education) === $answer) selected @endif value="{{ $answer }}">{{ $answer }}</option>
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
                        {{ __('app/demography.employment.question') }}
                    </label>

                    <select id="employment" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="employment" required>
                        <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>
                        @foreach( __('app/demography.employment.answers') as $answer)
                            <option @if(old('employment', $user->patient->application->demography_employment) === $answer) selected @endif value="{{ $answer }}">{{ $answer }}</option>
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
                        {{ __('app/demography.digital_apps.question') }}
                    </label>

                    <select id="digital_apps" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="digital_apps" required>
                        <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>
                        @foreach( __('app/demography.digital_apps.answers') as $answer)
                            <option @if(old('digital_apps', $user->patient->application->demography_digital_apps) === $answer) selected @endif value="{{ $answer }}">{{ $answer }}</option>
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
                        {{ __('app/demography.social_media.question') }}
                    </label>

                    <select id="social_media" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="social_media" required>
                        <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>
                        @foreach( __('app/demography.social_media.answers') as $answer)
                            <option @if(old('social_media', $user->patient->application->demography_social_media) === $answer) selected @endif value="{{ $answer }}">{{ $answer }}</option>
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
                        {{ __('app/demography.patient_communities.question') }}
                    </label>

                    <select id="patient_communities" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="patient_communities" required>
                        <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>
                        @foreach( __('app/demography.patient_communities.answers') as $answer)
                            <option @if(old('patient_communities', $user->patient->application->demography_patient_communities) === $answer) selected @endif value="{{ $answer }}">{{ $answer }}</option>
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
                        {{ __('app/demography.nutrition.question') }}
                    </label>

                    <select id="nutrition" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="nutrition" required>
                        <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>
                        @foreach( __('app/demography.nutrition.answers') as $answer)
                            <option @if(old('nutrition', $user->patient->application->demography_nutrition) === $answer) selected @endif value="{{ $answer }}">{{ $answer }}</option>
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
                        {{ __('app/demography.mobility.question') }}
                    </label>

                    <select id="mobility" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="mobility" required>
                        <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>
                        @foreach( __('app/demography.mobility.answers') as $answer)
                            <option @if(old('mobility', $user->patient->application->demography_mobility) === $answer) selected @endif value="{{ $answer }}">{{ $answer }}</option>
                        @endforeach
                    </select>

                    @error('mobility')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-wrap items-center">
                    <a href="{{ route('dashboard.index') }}" class="mr-1 bg-gray-500 hover:bg-gray-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Back
                    </a>

                    @if($user->patient->application->demography_status === \App\Models\Application::DEMOGRAPHY_STATUS_OPEN)
                        <button type="submit"
                                class="ml-1 mr-1 bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('app/demography.button') }}
                        </button>

                        <a title="Wizzerd" onclick="autoFill();" class="ml-1 bg-green-500 hover:bg-green-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            <i class="fal fa-magic"></i>
                        </a>

                        <script type="text/javascript">
                            function autoFill() {
                                document.getElementById('mobility').value = '{{ \Illuminate\Support\Facades\Lang::get('app/demography.mobility.answers.0') }}';
                                document.getElementById('nutrition').value = '{{ \Illuminate\Support\Facades\Lang::get('app/demography.nutrition.answers.0') }}';
                                document.getElementById('patient_communities').value = '{{ \Illuminate\Support\Facades\Lang::get('app/demography.patient_communities.answers.0') }}';
                                document.getElementById('social_media').value = '{{ \Illuminate\Support\Facades\Lang::get('app/demography.social_media.answers.0') }}';
                                document.getElementById('digital_apps').value = '{{ \Illuminate\Support\Facades\Lang::get('app/demography.digital_apps.answers.0') }}';
                                document.getElementById('education').value = '{{ \Illuminate\Support\Facades\Lang::get('app/demography.education.answers.0') }}';
                                document.getElementById('employment').value = '{{ \Illuminate\Support\Facades\Lang::get('app/demography.employment.answers.0') }}';
                            }
                        </script>

                    @endif




                </div>
            </form>

        </div>
    </div>

@endsection
