@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="font-bold text-xl">{{ $survey->title }}</div>
            <div class="font-light text-lg mb-2">{{ $survey->description }}</div>

            @if($survey->explanation)
                <div class="font-bold text-sm">Expanation</div>
                <p class="text-gray-700 text-base text-sm mb-2">
                    {{ $survey->explanation }}
                </p>
            @endif

            <form class="mt-6" method="POST" action="">
                @csrf

                @foreach($survey->questions as $question)
                    <div class="flex flex-wrap mb-6">
                        <label for="{{ $question->type }}" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ $question->text }}
                        </label>

                        <select id="{{ $question->type }}" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                name="{{ $question->type }}"  required>
                            <option value="" selected disabled>{{ __('app/demography.please_select') }}</option>

                            @foreach($question->answers as $answer)
                                <option @if(old($question->type) === $answer->value) selected @endif value="{{ $answer->value }}">{{ $answer->text }}</option>
                            @endforeach

                        </select>

                        @error($question->type)
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror

                    </div>
                @endforeach





            </form>

        </div>
    </div>

@endsection
