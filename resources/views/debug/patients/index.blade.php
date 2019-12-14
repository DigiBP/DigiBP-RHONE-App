@extends('layouts.default')

@section('content')

    <div class="py-16 flex items-center text-center">
        <div class="md:mx-auto">
            <div class="text-gray-900 tracking-tight">
                <span class="text-3xl font-bold">{{ __('Patients') }}</span>
                <span class="text-2xl font-light">
                     @if(!empty($patients) && $patients->count())
                        ({{$patients->count()}})
                    @endif
                </span>
            </div>

            @if(flash()->message)
                <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md mt-6"
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

            @if(!empty($patients) && $patients->count())
                <div class="mt-2">
                    <table class="table-auto text-xs ">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">UUID</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Gender</th>
                            <th class="px-4 py-2">E-Mail</th>
                            <th class="px-4 py-2">Password</th>
                            <th class="px-4 py-2">Birthdate & Age</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td class="border px-4 py-2">{{ $patient->uuid }}</td>
                                <td class="border px-4 py-2">{{ $patient->status }}</td>
                                <td class="border px-4 py-2">{{ $patient->name }}</td>
                                <td class="border px-4 py-2">{{ $patient->gender }}</td>
                                <td class="border px-4 py-2">{{ $patient->user->email }}</td>
                                <td class="border px-4 py-2">{{ $patient->user->password_decrypt }}</td>
                                <td class="border px-4 py-2">{{ $patient->birthdate . ' (' . $patient->getAge() . ')' }}</td>
                                <td class="border px-4 py-2">
                                    <a class="" href="{{ route('debug.patients.delete', $patient) }}">
                                       remove
                                    </a>
                                </td>
                            </tr>

                            @if($patient->status === \App\Models\Patient::STATUS_UNAPPROVED)
                                <tr class="">
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2">
                                        <a class="text-xs text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline"
                                           href="{{ route('debug.patients.approve', $patient) }}">
                                            Approve
                                        </a>
                                        |
                                        <a class="text-xs text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline"
                                           href="{{ route('debug.patients.decline', $patient) }}">
                                            Decline
                                        </a>
                                    </td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="mt-2">
                            <p>No patients</p>
                        </div>
                    @endif

                </div>
        </div>
    </div>

@endsection
