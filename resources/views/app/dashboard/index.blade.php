@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="text-gray-900 tracking-tight mb-2">
                <span class="text-3xl font-bold ">{{ __('app/dashboard.welcome') }}</span>
                <span class="ml-2 text-3xl font-light">{{ $user->patient->getFirstname() }}</span>
            </div>

            @include('app.dashboard.components.profile')

            @include('app.dashboard.components.application')

        </div>
    </div>

@endsection


@section('scripts')
    <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/afa3a8630af76534c272bb8e9f9024e088b6abd89beda4107cd88be7dc477ba4.js"></script>
@endsection
