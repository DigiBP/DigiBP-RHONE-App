<?php

use Illuminate\Database\Seeder;

class SDSCASurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = \App\Models\Survey::create([
            'active' => false,
            'title' => 'SDSCA Measure',
            'description' => 'The SDSCA survey will collect information on how you manage yourself living with diabetes and will include questions about your diet, exercise, caring for your feet and life style.  ',
        ]);

    }
}
