<div class="md:w-1/2 md:mx-auto mt-12">
    <footer class="flex flex-wrap p-6">
        <div class="w-full">
            <div class="py-6">
                <div class="text-black font-bold text-xs tracking-tight">
                    <a href="{{ route('start.index') }}" class="mr-2">{{ __('app/layouts.start') }}</a>
                    <a href="{{ route('registration.index') }}" class="mr-2">{{ __('app/layouts.registration') }}</a>
                    <a href="{{ route('login') }}" class="mr-2">{{ __('app/layouts.authorize') }}</a>
                </div>
                <div class="py-1 text-xs tracking-tight font-light">
                <span class="mr-2">
                    <a target="_blank" href="{{ route('debug.patients.index') }}">
                      <span class="" title="{{ config('digibp.version') }}">{{ __('app/layouts.copyright') }} {{ date('Y') }}</span>
                    </a>
                </span>
                </div>
            </div>
        </div>


        @auth
            <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 text-xs font-bold py-2 px-4 rounded-l"
               href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('app/layouts.logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth

    </footer>
</div>
