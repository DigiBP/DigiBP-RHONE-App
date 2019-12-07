@extends('layouts.default')

@section('content')

    <div class="py-16 flex items-center text-center">
        <div class="md:w-1/2 md:mx-auto">
            <div class="text-gray-900 text-5xl font-bold tracking-tight">
                <span>{{ __('Willkommen') }}</span>
            </div>

            <div class="mt-2">
                <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Abmelden') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>

@endsection
