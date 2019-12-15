<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
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

                $patient->surveys()->detach($survey);
                $patient->surveys()->attach($survey);

                $patient->surveys()->where('survey_id', $survey->id)->first()->pivot->update([
                    'status' => Survey::STATUS_VALIDATING
                ]);;

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
                dd('0');
                break;
        }

        return redirect()->route('dashboard.index');
    }
}
