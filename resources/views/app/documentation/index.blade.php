@extends('layouts.default')

@section('styles')

@endsection

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">
            <div class="font-bold text-xl">  {{ __('app/documentation.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/documentation.subtitle') }}</div>

            <div class="mt-8">



                <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">
                    API Documentation
                </p>
                <div class="text-gray-900 font-bold text-xl mb-2">Postman</div>
                <a target="_blank" href="{{ config('digibp.documentation.postman') }}" class="bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('app/documentation.show') }}
                </a>
                </div>

                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        Code Versioning
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Github</div>
                    <a target="_blank" href="{{ config('digibp.documentation.github.camunda') }}" class="mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        DigiBP-RHONE
                    </a>

                    <a target="_blank" href="{{ config('digibp.documentation.github.app') }}" class="ml-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        DigiBP-RHONE-App
                    </a>

                </div>

                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        Workflow Engine
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Camunda</div>
                    <a target="_blank" href="{{ config('digibp.documentation.camunda') }}" class="bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('app/documentation.show') }}
                    </a>
                </div>

            </div>


        </div>
    </div>

@endsection


@section('scripts')
@endsection
