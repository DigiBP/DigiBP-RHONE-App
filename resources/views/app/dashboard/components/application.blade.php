<div class="">
    <div class="font-bold text-xl">  {{ __('app/dashboard.application.title') }}</div>
    <div class="font-light text-lg mb-6">  {{ __('app/dashboard.application.subtitle') }}</div>

    @if(!empty($surveys) && $surveys->count())
        @foreach($surveys as $survey)


            <div class="{{ $survey->availabilityBackground() }} rounded overflow-hidden shadow-lg mb-6">
                <div class="px-6 py-4">
                    <div class="text-xs mb-1">{{ $survey->availability() }}</div>
                    <div class="font-bold text-xl mb-2">{{ $survey->title }}</div>
                    <p class="text-gray-700 text-base mb-2">
                        {{ $survey->description }}
                    </p>

                    <p style="font-size: 8px;" class="text-base text-xs mb-2">
                        {{ $survey->uuid }}
                    </p>

                    @if($survey->availability)

                        @if(auth()->user()->patient->surveys()->where('survey_id', $survey->id)->exists())

                            @if(auth()->user()->patient->surveys()->where('survey_id', $survey->id)->first()->pivot->status === \App\Models\Survey::STATUS_OPEN)

                                <a href="{{ route('surveys.show', $survey) }}" class="bg-blue-500 hover:bg-blue-700 text-xs text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('app/dashboard.application.survey.button_take') }}
                                </a>

                            @elseif(auth()->user()->patient->surveys()->where('survey_id', $survey->id)->first()->pivot->status === \App\Models\Survey::STATUS_RETAKE)

                                <a href="{{ route('surveys.show', $survey) }}" class="bg-orange-500 hover:bg-orange-700 text-xs text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('app/dashboard.application.survey.button_retake') }}
                                </a>

                            @endif


                        @else
                            <a href="{{ route('surveys.show', $survey) }}" class="bg-blue-500 hover:bg-blue-700 text-xs text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('app/dashboard.application.survey.button_take') }}
                            </a>
                         @endif
                    @endif
                </div>
            </div>



        @endforeach
    @endif

    <div class="flex flex-wrap items-center">
            <a href="{{ route('application.submit') }}"
                class="bg-green-500 hover:bg-green-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ">
            {{ __('app/dashboard.application.button') }}
        </a>
    </div>
</div>
