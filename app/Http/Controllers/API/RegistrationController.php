<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ApprovedRegistrationRequest;
use App\Http\Requests\API\DeclinedRegistrationRequest;
use App\Jobs\DeleteUserJob;
use App\Models\Patient;
use App\Notifications\ApprovedUserRegistration;
use App\Notifications\DeclinedUserRegistration;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class RegistrationController extends Controller
{
    public function approve(ApprovedRegistrationRequest $request)
    {
        $patient = $this->getPatient($request->uuid);

        Log::info( 'uuid: ' . $patient->uuid .' status: approved');

        switch ($patient->status) {
            case Patient::STATUS_UNAPPROVED:
                $patient->update([
                    'status' => Patient::STATUS_APPROVED,
                    'confirmed_diagnosis' => true,
                ]);
                $user = $patient->user;
                $user->notify(new ApprovedUserRegistration($user));
                break;
            default:
                return Response::json(['message' => 'Registration status is already approved'],403);
                break;
        }
    }

    public function decline(DeclinedRegistrationRequest $request)
    {
        $patient = $this->getPatient($request->uuid);

        Log::info( 'uuid: ' . $patient->uuid .' status: declined');

        switch ($patient->status) {
            case Patient::STATUS_UNAPPROVED:

                $user = $patient->user;

                $user->notify(new DeclinedUserRegistration($patient));

                DeleteUserJob::dispatch($user);

                break;

            default:
                return Response::json(['message' => 'You can only decline unapproved registrations'],403);
                break;
        }
    }

    protected function getPatient($uuid)
    {
        return Patient::where('uuid', $uuid)->first();
    }
}
