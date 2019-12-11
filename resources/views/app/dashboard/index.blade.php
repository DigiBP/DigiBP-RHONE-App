@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="text-gray-900 tracking-tight mb-2">
                <span class="text-3xl font-bold ">{{ __('app/dashboard.welcome') }}</span>
                @if($user->patient->name)
                    <span class="ml-2 text-3xl font-light">{{ $user->patient->name }}</span>
                @endif
            </div>

            @if(!$user->patient->name)
                 @include('app.dashboard.components.update_profile')
            @else
                @include('app.dashboard.components.profile')
            @endif

            @if($user->patient->name)
                @if($user->patient->application()->exists())
                    @include('app.dashboard.components.application')
                @else
                    @include('app.dashboard.components.application_start')
                @endif
            @endif

        </div>
    </div>

@endsection
