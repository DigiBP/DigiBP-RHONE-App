<div class="">
    <div class="font-bold text-xl">  {{ __('app/dashboard.application.title') }}</div>
    <div class="font-light text-lg mb-6">  {{ __('app/dashboard.application.subtitle') }}</div>

    @if(!empty($surveys) && $surveys->count())
        @foreach($surveys as $survey)
            <div class="bg-gray-100 rounded overflow-hidden shadow-lg mb-6">
                <div class="px-6 py-4">
                    <div class="font-light text-sm mb-2">Status: Survey currently not available</div>
                    <div class="font-bold text-xl mb-2">{{ $survey->title }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $survey->description }}
                    </p>
                </div>
            </div>
        @endforeach
    @endif

    <div class="flex flex-wrap items-center">
        <span
            class="bg-gray-500 hover:bg-gray-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-not-allowed">
            {{ __('app/dashboard.application.button') }}
        </span>
    </div>
</div>
