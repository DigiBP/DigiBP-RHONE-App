<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class PostRegistrationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $age;
    protected $confirmed_diagnosis;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($birth_date, bool $confirmed_diagnosis)
    {
        $this->age = Carbon::parse($birth_date)->age;
        $this->confirmed_diagnosis = $confirmed_diagnosis;
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
                'age' => $this->age,
                'confirmed_diagnosis' => $this->confirmed_diagnosis
            ]
        ]);

        //dd($response)

    }
}
