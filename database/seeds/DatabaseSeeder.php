<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $this->call(DiabetisSurveySeeder::class);
        $this->call(DemographySurveySeeder::class);
        $this->call(MedicalSurveySeeder::class);
        $this->call(SDSCASurveySeeder::class);
    }
}
