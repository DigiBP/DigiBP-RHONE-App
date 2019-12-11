<?php

namespace App\Jobs;

use GenderApi\Client as GenderApiClient;
use App\Models\Patient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DetermineGenderJob implements ShouldQueue
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
        $gender = 'diverse';

        $gender_api_token = config('services.gender_api_token');

        if($gender_api_token)
        {
            try {
                $apiClient = new GenderApiClient($gender_api_token);

                $lookup = $apiClient->getByFirstNameAndLastNameAndCountry($this->patient->name, 'CH');
                if ($lookup->genderFound())
                {
                    $gender = $lookup->getGender();
                }

            } catch (\Exception $exception) {

            }
        }

        $this->patient->update([
            'gender' =>  $gender
        ]);

    }
}
