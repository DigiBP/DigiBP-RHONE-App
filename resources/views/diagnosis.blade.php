@extends('layouts.default')

@section('styles')
@endsection

@section('content')
    <div class="md:w-1/2 md:mx-auto mt-24">

        <div class="p-6">
            <div class="font-bold text-xl">{{ __('app/diagnosis.title') }}</div>
            <div class="font-light text-lg mb-2">{{ __('app/diagnosis.subtitle') }}</div>

            <p class="">
                {{ __('app/diagnosis.paragraph') }}
            </p>

        </div>

        <div class="px-6">
            <a href="{{ route('start.index') }}" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('app/diagnosis.button') }}
            </a>
        </div>
    </div>

    @include('layouts.partials.footer')

@endsection


@section('scripts')
@endsection
