<?php

namespace App\Jobs;

use App\Models\Patient;
use App\Models\Survey;
use GuzzleHttp\RequestOptions;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CamundaSurveyPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $patient;
    protected $survey;
    protected $score;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Patient $patient, Survey $survey, $score)
    {
        $this->patient = $patient;
        $this->survey = $survey;
        $this->score = $score;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {
        $client = new \GuzzleHttp\Client();

        $url = config('digibp.camunda.survey_post');

       $response = $client->post($url,[
            'headers' => [
                'Content-Type' => 'application/json'
            ],

          RequestOptions::JSON => [
                'uuid' => $this->patient->uuid,
                'survey_uuid' => $this->survey->uuid,
                'survey_score' => $this->score,
            ]
        ]);
    }
}
