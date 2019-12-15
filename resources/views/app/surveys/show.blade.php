@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="font-bold text-xl">{{ $survey->title }}</div>
            <div class="font-light text-lg mb-2">{{ $survey->description }}</div>

            @if($survey->explanation)
                <p class="text-red-700 text-base text-sm mb-2">
                    {{ $survey->explanation }}
                </p>
            @endif

            <form class="mt-6" method="POST" action="{{ route('surveys.store', $survey) }}">
                @csrf

                @foreach($survey->questions as $question)
                    <div class="flex flex-wrap mb-6">
                        <label for="{{ $question->type }}" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ $question->text }}
                        </label>

                        <select id="{{ $question->type }}"
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                name="{{ $question->type }}" required>
                            <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>

                            @foreach($question->answers as $answer)
                                <option @if(old($question->type) === $answer->value) selected
                                        @endif value="{{ $answer->value }}">{{ $answer->text }}</option>
                            @endforeach

                        </select>

                        @error($question->type)
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror

                    </div>
                @endforeach


                <div class="flex flex-wrap items-center">
                    <a href="{{ route('dashboard.index') }}"
                       class="mr-1 text-xs bg-gray-500 hover:bg-gray-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Back
                    </a>

                    @if($survey->availability)

                        @if(auth()->user()->patient->surveys()->where('survey_id', $survey->id)->exists())

                            @if(auth()->user()->patient->surveys()->where('survey_id', $survey->id)->first()->pivot->status === \App\Models\Survey::STATUS_OPEN)

                                <button type="submit"
                                        class="ml-1 mr-1 bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('app/demography.button') }}
                                </button>

                                <a title="Wizzerd" onclick="positive_autoFill();"
                                   class="ml-1 text-xs bg-green-500 hover:bg-green-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    +
                                </a>

                                <a title="Wizzerd" onclick="negative_autoFill();"
                                   class="ml-1 text-xs bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    -
                                </a>

                            @elseif(auth()->user()->patient->surveys()->where('survey_id', $survey->id)->first()->pivot->status === \App\Models\Survey::STATUS_DECLINED)

                                <button type="submit"
                                        class="ml-1 mr-1 bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('app/demography.button') }}
                                </button>

                                <a title="Wizzerd" onclick="positive_autoFill();"
                                   class="ml-1 text-xs bg-green-500 hover:bg-green-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    +
                                </a>

                                <a title="Wizzerd" onclick="negative_autoFill();"
                                   class="ml-1 text-xs bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    -
                                </a>

                            @endif

                        @else
                            <button type="submit"
                                    class="ml-1 mr-1 bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('app/demography.button') }}
                            </button>

                            <a title="Wizzerd" onclick="positive_autoFill();"
                               class="ml-1 text-xs bg-green-500 hover:bg-green-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                +
                            </a>

                            <a title="Wizzerd" onclick="negative_autoFill();"
                               class="ml-1 text-xs bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                -
                            </a>
                        @endif

                    @endif

                    <script type="text/javascript">

                        function negative_autoFill() {

                            var types = {!! $survey->questions->pluck('type') !!}

                            types.forEach(element =>
                                document.getElementById(element).value = getRandomInt(1)
                            );
                        }

                        function positive_autoFill() {

                            var types = {!! $survey->questions->pluck('type') !!}

                            types.forEach(element =>
                                document.getElementById(element).value = getRandomInt(4)
                            );
                        }

                        function getRandomInt(max) {
                            return Math.floor(Math.random() * Math.floor(max) + 1);
                        }

                    </script>

                </div>

            </form>

        </div>
    </div>

@endsection
