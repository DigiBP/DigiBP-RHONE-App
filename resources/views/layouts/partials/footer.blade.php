<div class="md:w-1/2 md:mx-auto mt-24">
    <footer class="flex flex-wrap p-6">
        <div class="w-full">
            <div class="py-6">
                <div class="text-black font-bold text-xs tracking-tight">
                    <a href="{{ route('login') }}" class="mr-2">Authorize</a>
                </div>
                <div class="py-1 text-xs tracking-tight font-light">
                <span class="mr-2">
                    <a target="_blank" href="{{ route('debug.patients.index') }}">
                        <i class="fad fa-copyright"></i>
                    </a>
                   <span class="" title="{{ config('digibp.version') }}">Copyright {{ date('Y') }}</span>
                </span>
                </div>
            </div>
        </div>


        @auth
            <div class="mt-2">
                <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('app/dashboard.logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
         @endauth

    </footer>
</div>
