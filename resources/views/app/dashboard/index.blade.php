@extends('layouts.default')

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="text-gray-900 tracking-tight mb-2">
                <span class="text-3xl font-bold ">{{ __('app/dashboard.welcome') }}</span>
                <span class="ml-2 text-3xl font-light">{{ $user->patient->getFirstname() }}</span>
            </div>



            @include('app.dashboard.components.profile')

            @if(flash()->message)
                <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-teal-900 px-4 py-3 shadow-md mt-6 mb-6"
                     role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">  {{ flash()->message }}</p>
                        </div>
                    </div>
                </div>
            @endif

            @include('app.dashboard.components.application')


        </div>
    </div>

@endsection


@section('scripts')
@endsection
