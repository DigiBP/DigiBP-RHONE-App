<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ReceiveSurveyRequest;
use App\Models\Patient;
use App\Models\Survey;
use Illuminate\Support\Facades\Log;

class SurveyController extends Controller
{
    public function approve(ReceiveSurveyRequest $request)
    {


        $patient = $this->getPatient($request->uuid);
        $survey = $this->getSurvey($request->survey_uuid);

        Log::info( 'uuid: ' . $patient->uuid .' survey: ' .  $survey->uuid . ' status: approved');

        $patient->surveys()->where('survey_id', $survey->id)->first()->pivot->update([
            'status' => Survey::STATUS_ACCEPTED,
        ]);;
    }

    public function retake(ReceiveSurveyRequest $request)
    {
        $patient = $this->getPatient($request->uuid);
        $survey = $this->getSurvey($request->survey_uuid);

        Log::info( 'uuid: ' . $patient->uuid .' survey: ' .  $survey->uuid . ' status: retaked');

        $patient->surveys()->where('survey_id', $survey->id)->first()->pivot->update([
            'status' => Survey::STATUS_RETAKE,
        ]);;

    }
    public function decline(ReceiveSurveyRequest $request)
    {
        $patient = $this->getPatient($request->uuid);
        $survey = $this->getSurvey($request->survey_uuid);

        Log::info( 'uuid: ' . $patient->uuid .' survey: ' .  $survey->uuid . ' status: declined');

        $patient->surveys()->where('survey_id', $survey->id)->first()->pivot->update([
            'status' => Survey::STATUS_DECLINED,
        ]);;
    }

    protected function getPatient($patient_uuid)
    {
        return Patient::where('uuid', $patient_uuid)->first();
    }

    protected function getSurvey($survey_uuid)
    {
        return Survey::where('uuid', $survey_uuid)->first();
    }
}
