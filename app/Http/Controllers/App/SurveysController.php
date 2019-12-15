<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Jobs\CamundaRegistrationPost;
use App\Jobs\CamundaSurveyPost;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveysController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Survey $survey)
    {
        return view('app.surveys.show', compact('survey'));
    }

    public function store(Survey $survey, Request $request)
    {
        $patient = auth()->user()->patient;

        switch ($survey->camunda_identifier) {

            //Diabetis Quality of Life
            case 'survey_001':

                $results = $request->all();

                unset($results['_token']);

                $score = array_sum($results);

                $patient->surveys()->detach($survey);
                $patient->surveys()->attach($survey);

                $patient->surveys()->where('survey_id', $survey->id)->first()->pivot->update([
                    'status' => Survey::STATUS_VALIDATING,
                    'score' => $score
                ]);;

                if(app()->environment('production'))
                {
                    CamundaSurveyPost::dispatch($patient, $survey, $score);
                }
                break;

            //Demography
            case 'survey_002':

                if (!$patient->surveys()->where('survey_id', $survey->id)->exists())
                {
                    $patient->surveys()->attach($survey);
                }

                $patient->surveys()->where('survey_id', $survey->id)->first()->pivot->update([
                'status' => Survey::STATUS_ACCEPTED
                ]);;

                break;
            default:
                break;
        }

        return redirect()->route('dashboard.index');
    }
}
