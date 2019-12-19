@extends('layouts.default')

@section('styles')


@endsection

@section('content')

    <div class="md:w-1/2 md:mx-auto mt-24">
        <div class="p-6">
            <h1 class="text-6xl font-bold leading-tight">{{ __('app/start.title') }}</h1>
            <h2 class="uppercase text-2xl font-light leading-tight">{{ __('app/start.subtitle') }}</h2>

            <p class="leading-normal text-xl mt-2">{{ __('app/start.paragraph') }}</p>

            <div class="mt-6">
                <a href="{{ route('registration.index') }}"
                   class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('app/start.button') }}
                </a>
            </div>


        </div>


        <div class="p-6">
            <h1 class="text-4xl font-bold leading-tight">Business Case</h1>

            <p class="leading-normal text-xl mt-2">30% of clinical development time is spent on patient recruitment a
                daily delay in patient recruitment is estimated to cost life sciences USD 80 million per day More
                than 50% of trial centers are unable to fulfill their patient recruitment targets new innovative
                therapies can not be evaluated or delayed recently, initiatives in recruitment via social media and
                patient associations.
            </p>


        </div>

        <div class="p-6">
            <h1 class="text-4xl font-bold leading-tight">Personas</h1>
            <h2 class="uppercase text-2xl font-light leading-tight">Diabetes Patient Segmentationby age group</h2>

            <div class="w-full flex mt-4">
                <div
                    class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    style="background-image: url('{{ asset('images/personas/joel.jpg') }}')" title="Joel">
                </div>
                <div
                    class="bg-orange-200 border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                            Monitor for later participation
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Joel</div>
                        <p class="text-grey-darker text-base">
                            Joel, 25 years single, post graduate student.
                            Type 1 diabetes patient,
                            Using insulin and taking oral medications.
                            Sporty, busy social life but struggles with carb counting.

                        </p>
                    </div>

                </div>
            </div>

            <div class="w-full flex mt-4">

                <div
                    class="bg-green-200 border-l border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-l p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                            Accept Now
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Markus</div>
                        <p class="text-grey-darker text-base">
                            Markus, 35 years full timeteacher with 2 young kids & wife.
                            Work Life Balance is becoming increasing difficult to maintain. Hemoglobin A1c,%
                            has progressively increased.
                        </p>
                    </div>

                </div>

                <div
                    class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-r text-center overflow-hidden"
                    style="background-image: url('{{ asset('images/personas/markus.jpg') }}')" title="Markus">
                </div>
            </div>

            <div class="w-full flex mt-4">
                <div
                    class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    style="background-image: url('{{ asset('images/personas/ingrid.jpg') }}')" title="Ingrid">
                </div>
                <div
                    class="bg-red-200 border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                            Not Gated
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Ingrid</div>
                        <p class="text-grey-darker text-base">
                            Ingrid, 54 years had hadan active life until the last3 years, when her husband passed
                            away. Her Body Mass Index BMI has now increased to 35, with an increased metabolic risk
                            profile. Dieting has affected her social life.
                        </p>
                    </div>

                </div>
            </div>

        </div>


        <div class="p-6">

            <h1 class="text-4xl font-bold leading-tight">Outlook & Next steps</h1>

            <h3 class=" text-lg font-bold mt-6">
                <b class="bg-red-200">Shorter communication time for patients</b>
            </h3>

            <p>
                Regarding the their eligibility for trials participation through automation processes and focusing
                upfront on key issues (patient`s age, HCP confirmed diagnosis and impact of Diabetes on patients
                lives).
            </p>

            <h3 class=" text-lg font-bold mt-6">
                <b class="bg-red-200"> Potentially leading to improved and faster patient recruitment for clinical
                    trials sponsors
                    (Life Sciences Companies and CROs)</b>
            </h3>

            <h3 class="text-lg font-bold mt-6">
                <b class="bg-orange-200">For Trials Sponsors</b>
            </h3>

            <p>Improved Net present value (NPV), with increased confidence (increase in eNPV)"

                for example, a delay of 6 months to 1 year for launch, significantly impacts the NPV.
            </p>

            <h3 class="text-lg font-bold mt-6">
                <b class="bg-yellow-200">For Patients</b>
            </h3>

            <p>Faster access to new innovative therapies with a patient centric process (trust  & respect)
            </p>

            <h3 class="text-lg font-bold mt-6">
                <b class="bg-green-200">Clinical validation of the app</b>
            </h3>

            <p>Collaboration with health care practitioners HCPs, Diabetes Patient Organisations and Academic Trials
                Centers, and prepare a funding submission to Innosuisse (with academic centers).
            </p>

            <h3 class="text-lg font-bold mt-6">
                <b class="bg-blue-200">innosuisse</b>
            </h3>





        </div>
    </div>

@endsection


@section('scripts')
@endsection
