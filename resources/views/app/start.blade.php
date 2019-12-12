@extends('layouts.default')

@section('styles')


@endsection

@section('content')

    <div class="md:w-1/3 md:mx-auto mt-24">

        <div class="p-6">
            <span class="uppercase tracking-loose w-full mb-2">{{ __('app/start.subtitle') }}</span>

            <h1 class="text-6xl font-bold leading-tight mb-4">{{ __('app/start.title') }}</h1>

            <p class="leading-normal text-xl">{{ __('app/start.paragraph') }}</p>

        </div>

        <div class="p-6">
            <a href="{{ route('registration.index') }}" class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('app/start.button') }}
            </a>
        </div>
    </div>

@endsection


@section('scripts')
@endsection
