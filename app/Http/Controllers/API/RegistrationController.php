<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ApprovedRegistrationRequest;
use App\Http\Requests\API\DeclinedRegistrationRequest;
use App\Models\Patient;
use App\Notifications\ApprovedUserRegistration;
use App\Notifications\DeclinedUserRegistration;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function approve(ApprovedRegistrationRequest $request)
    {
        $patient = $this->getPatient($request->uuid);

        switch ($patient->status) {
            case Patient::STATUS_UNAPPROVED:
                $patient->update([
                    'status' => Patient::STATUS_APPROVED
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

        switch ($patient->status) {
            case Patient::STATUS_UNAPPROVED:
                $user = $patient->user;
                $user->notify(new DeclinedUserRegistration($request->reason));
                $user->delete();
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
