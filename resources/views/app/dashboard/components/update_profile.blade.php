<div class="font-bold text-xl">  {{ __('app/dashboard.update_profile.title') }}</div>
<div class="font-light text-lg mb-2">  {{ __('app/dashboard.update_profile.subtitle') }}</div>

<div class="mt-2">

    <form class="" method="POST" action="{{ route('profile.update') }}">
        @csrf

        <div class="flex flex-wrap mb-2">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('app/dashboard.update_profile.form.name') }}
            </label>

            <input id="name" type="text" placeholder="{{ __('app/dashboard.update_profile.form.name') }}"
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
                    class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('app/dashboard.update_profile.form.button') }}
            </button>
        </div>
    </form>

</div>
