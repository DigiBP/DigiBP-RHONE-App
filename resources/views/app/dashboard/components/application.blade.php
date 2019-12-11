<div class="mt-16">
    <div class="font-bold text-xl">  {{ __('app/dashboard.application.title') }}</div>
    <div class="font-light text-lg mb-2">  {{ __('app/dashboard.application.subtitle') }}</div>

    @if($user->patient->application->demography_status === \App\Models\Application::DEMOGRAPHY_STATUS_OPEN)
        <div class="bg-gray-200 rounded overflow-hidden shadow-lg mb-4">
            <div class="px-6 py-4">
                <div class="font-light text-sm mb-2">Status: {{ $user->patient->application->demography_status }}</div>
                <div class="font-bold text-xl mb-2">Pg1-Demographics</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>

                <div class="mt-4">
                    <a href="{{ route('application.demography.index') }}"
                       class="bg-green-500 hover:bg-green-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Take survey
                    </a>
                </div>
            </div>
        </div>
    @endif

    <div class="bg-gray-200 rounded overflow-hidden shadow-lg mb-4">
        <div class="px-6 py-4">
            <div class="font-light text-sm mb-2">Status: Survey currently not available</div>
            <div class="font-bold text-xl mb-2">Pg 2 -Medical History</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
    </div>

    <div class="bg-gray-200 rounded overflow-hidden shadow-lg mb-4">
        <div class="px-6 py-4">
            <div class="font-light text-sm mb-2">Status: Survey currently not available</div>
            <div class="font-bold text-xl mb-2">Pg 3 -SDSCA Measure</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
    </div>

    <div class="bg-gray-200 rounded overflow-hidden shadow-lg mb-8">
        <div class="px-6 py-4">
            <div class="font-light text-sm mb-2">Status: Survey currently not available</div>
            <div class="font-bold text-xl mb-2">Pg 4 -Diabetes Quality of Life</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
    </div>


    <div class="flex flex-wrap items-center">
        @if($user->patient->application->demography_status === \App\Models\Application::DEMOGRAPHY_STATUS_APPROVED)
            <a href="{{ route('application.submit') }}"
               class="bg-green-500 hover:bg-green-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('app/dashboard.application.button') }}
            </a>
        @else
            <span
                class="bg-gray-500 hover:bg-gray-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-not-allowed">
                   {{ __('app/dashboard.application.button') }}
                </span>
        @endif
    </div>
</div>
