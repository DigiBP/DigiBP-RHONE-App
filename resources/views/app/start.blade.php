@extends('layouts.default')

@section('styles')


@endsection

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">
            <h1 class="text-6xl font-bold leading-tight">{{ __('app/start.title') }}</h1>
            <h2 class="uppercase text-2xl font-light leading-tight">{{ __('app/start.subtitle') }}</h2>

            <p class="leading-normal text-xl mb-6 mt-2">{{ __('app/start.paragraph') }}</p>

            <div class="">
                <a href="{{ route('registration.index') }}" class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('app/start.button') }}
                </a>
            </div>


        </div>

        <div class="p-6">
            <h1 class="text-4xl font-bold leading-tight">Persona</h1>
            <h2 class="uppercase text-2xl font-light leading-tight">Lorem Ipsum</h2>

            <div class="w-full flex mt-4">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset('images/personas/markus.jpg') }}')" title="Woman holding a mug">
                </div>
                <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                            Diabetes Type XYZ
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Markus C.</div>
                        <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection


@section('scripts')
@endsection
