<?php

namespace App\Jobs;

use App\Models\Patient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PostRegistrationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $patient;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Patient $patient)
    {
        $this->patient = $patient;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {
        $client = new \GuzzleHttp\Client();

        $url = config('digibp.camunda.registration_post');

        $response = $client->post($url, [
            'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/json'],
            'form_params' => [
                //ca72e506-c006-4cd8-892b-d7f840661ed3
                'uuid' => $this->patient->uuid,
                //25
                'age' => $this->patient->getAge(),
            ]
        ]);

    }
}
