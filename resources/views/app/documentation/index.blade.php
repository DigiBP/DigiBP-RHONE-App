@extends('layouts.default')

@section('styles')

@endsection

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">

            <div class="font-bold text-xl">  {{ __('app/documentation.title') }}</div>
            <div class="font-light text-lg mb-2">  {{ __('app/documentation.subtitle') }}</div>

            <div class="mt-8">
                <div class="font-bold text-lg mb-2">Table of content</div>

                <ul class="font-light text-xl">
                    <li><a href="#process" class="text-blue-500">Process</a></li>
                    <li><a href="#links" class="text-blue-500">Links</a></li>
                </ul>
            </div>

            <div  id="process"  class="mt-8">

                <div class="font-bold text-2xl mb-2 text-blue-500 underline">Process</div>

                <p>
                    Recruitment into clinical trials are complex decision making by patients is under estimated. The following points are considered for this project. The project carried out the focus on patients diagnosed with chronic illness example diabetes.
                </p>

                <ul class="mt-2 list-disc">
                    <li>
                        Complex decision making to participate in clinical trials. Motivation to participation varies significantly across age group, involving a varied range of patient care issues
                    </li>

                    <li>
                        Absence of reliable biomarkers to help complex decision making for “non- cancer” illness. Disability scores can help patients to better understand the impact of their illness.
                    </li>

                    <li>
                        For eligible patients, Long periods before “warm handover” to a medical person for further screening potential patients are loss to any follow-ups. Long periods of “ radio” silence
                    </li>
                </ul>

                <div class="mt-4">
                    <a target="_blank" href="{{ asset('files/as_is_process.bpmn') }}"
                       class="bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        As-Is (BPMN)
                    </a>
                </div>


            </div>

            <div  id="links"  class="mt-8">

                <div class="font-bold text-2xl mb-2 text-blue-500 underline">Links</div>

                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        API
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Postman</div>
                    <a target="_blank" href="{{ config('digibp.documentation.postman') }}"
                       class="bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('app/documentation.show') }}
                    </a>
                </div>

                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        Code Versioning
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Github</div>
                    <a target="_blank" href="{{ config('digibp.documentation.github.camunda') }}"
                       class="mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        DigiBP-RHONE
                    </a>

                    <a target="_blank" href="{{ config('digibp.documentation.github.app') }}"
                       class="ml-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        DigiBP-RHONE-App
                    </a>

                </div>

                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        Workflow Engine
                    </p>


                    <div class="text-gray-900 font-bold text-xl ">Camunda</div>

                    <p class="mb-2">Login with demo/demo. Navigate to the Cockpit. Check out Deployed Process Definitions & Decision Definitions</p>


                    <a target="_blank" href="{{ config('digibp.documentation.camunda') }}"
                       class="mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('app/documentation.show') }}
                    </a>

                </div>

                <div class="mb-4">

                    <a target="_blank" href="https://github.com/DigiBP/DigiBP-RHONE/blob/master/src/main/resources/Clinical_Trial_Registration.bpmn"
                       class=" mr-1 bg-gray-500 hover:bg-gray-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Clinical Trial Registration (BPMN)
                    </a>

                </div>

                    <div class="mb-4">
                    <a target="_blank" href="https://github.com/DigiBP/DigiBP-RHONE/blob/master/src/main/resources/Clinical_Trial_Registration_Validation.dmn"
                       class="mr-1 bg-gray-500 hover:bg-gray-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Clinical Trial Registration Validation (DMN)
                    </a>
                </div>
                <div class="mb-4">

                    <a target="_blank" href="https://github.com/DigiBP/DigiBP-RHONE/blob/master/src/main/resources/Clinical_Trial_Survey.bpmn"
                       class="mr-1 bg-gray-500 hover:bg-gray-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Clinical Trial Survey (BPMN)
                    </a>

                </div>

                    <div class="mb-4">

                    <a target="_blank" href="https://github.com/DigiBP/DigiBP-RHONE/blob/master/src/main/resources/Clinical_Trial_Survey_Validation.dmn"
                       class="mr-1 bg-gray-500 hover:bg-gray-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Clinical Trial Survey Validation
                    </a>


                </div>


                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        Integrated Services
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Services</div>
                    <a target="_blank" href="{{ config('digibp.documentation.services.gender') }}"
                       class="mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Gender API
                    </a>

                    <a target="_blank" href="{{ config('digibp.documentation.services.slack') }}"
                       class="ml-1 mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Slack
                    </a>

                    <a target="_blank" href="https://www.userlike.com"
                       class="ml-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Userlike
                    </a>
                </div>

                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        Application
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Pact-D </div>

                    <a target="_blank" href="https://www.digitalocean.com"
                       class="mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Digital Ocean
                    </a>

                    <a target="_blank" href="https://forge.laravel.com"
                       class="ml-1 mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Laravel Forge
                    </a>
                </div>



                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        Excel Survey
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Personas</div>
                    <a target="_blank" href="{{ asset('files/joel_current_digibp.xlsx') }}"
                       class="mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Joel
                    </a>

                    <a target="_blank" href="{{ asset('files/markus_current_digibp.xlsx') }}"
                       class="mr-1 bg-red-500 hover:bg-red-700 text-gray-100 text-xs font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Markus
                    </a>


                </div>

            </div>


            </div>
    </div>

@endsection


@section('scripts')
@endsection
