<?php

use Illuminate\Database\Seeder;

class MedicalSurveySeeder extends Seeder
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
            'title' => 'Medical History',
            'description' => 'Medical history collects information about you regarding your health including any medications that might take or use to help manage your illness. You may be asked to load photos of your medications, and information collected by your wellness gadgets such as blood pressure (if you are using these).',
        ]);

    }
}
