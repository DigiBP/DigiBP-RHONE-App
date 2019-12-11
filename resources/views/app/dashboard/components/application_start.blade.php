<div class="mt-16">
    <div class="font-bold text-xl">{{ __('app/dashboard.application_start.title') }}</div>
    <div class="font-light text-lg mb-2">{{ __('app/dashboard.application_start.subtitle') }}</div>

    <a title="" href="{{ route('application.create', $user->patient) }}" class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        {{ __('app/dashboard.application_start.button') }}
    </a>

</div>
