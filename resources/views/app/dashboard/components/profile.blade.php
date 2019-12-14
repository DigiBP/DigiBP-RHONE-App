<div class="font-bold text-xl">  {{ __('app/dashboard.profile.title') }}</div>
<div class="font-light text-lg mb-2">  {{ __('app/dashboard.profile.subtitle') }}</div>

<div class="flex flex-wrap mt-6 mb-6">

    <div class="w-full md:w-1/2 mb-6 md:mb-0">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
            {{ __('app/dashboard.profile.form.name') }}
        </label>
        <input value="{{ $user->patient->name }}"
               class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               type="text" disabled>
    </div>

    <div class="w-full md:w-1/2 px-3">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
            {{ __('app/dashboard.profile.form.gender') }}
                <a title="Switch Gender" href="{{ route('profile.update') }}" class="text-red-700 text-xs font-light ml-1">switch</a>
        </label>
        <input value="{{ $user->patient->gender }}"
               class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               type="text" disabled>

        <a target="_blank" href="https://gender-api.com" class="text-xs font-light text-blue-500 ml-1">a service provided by Gender API</a>
    </div>

    <div class="w-full md:w-1/2 mb-6 md:mb-0 mt-2">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
            {{ __('app/dashboard.profile.form.birthdate') }}
        </label>
        <input value="{{ $user->patient->birthdate }}"
               class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               type="text" disabled>
    </div>
    <div class="w-full md:w-1/2 px-3 mt-2">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
            {{ __('app/dashboard.profile.form.age') }}
        </label>
        <input value="{{ $user->patient->getAge() }}"
               class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               type="text" disabled>
    </div>

</div>
