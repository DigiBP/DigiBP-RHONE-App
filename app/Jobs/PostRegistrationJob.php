<?php

namespace App\Jobs;

use App\Models\Patient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

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

        $url = config('digibp.camunda.domain') . config('digibp.camunda.post_registration');

        $response = $client->post($url, [
            'form_params' => [
                'uuid' => $this->patient->uuid, //ca72e506-c006-4cd8-892b-d7f840661ed3
                'age' => $this->patient->getAge(), //25
                'confirmed_diagnosis' => $this->patient->confirmed_diagnosis //true/false
            ]
        ]);
    }
}
