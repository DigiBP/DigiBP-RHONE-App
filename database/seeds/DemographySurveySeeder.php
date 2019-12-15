<?php

use Illuminate\Database\Seeder;

class DemographySurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = \App\Models\Survey::create([
            'availability' => true,
            'camunda_identifier' => 'survey_002',
            'title' => 'Demographics',
            'description' => 'Demographics survey collects information about you.',
        ]);

         $question_01 = \App\Models\Question::create([
            'survey_id' => $survey->id,
             'type' => 'education',
             'text' => 'What was your highest level of education achieved?',
         ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_01->id,
            'text' => 'Did not complete high school',
            'value' => 1,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_01->id,
            'text' => 'Completed high school',
            'value' => 2,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_01->id,
            'text' => 'Some college or vocational training',
            'value' => 3,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_01->id,
            'text' => 'University undergraduate',
            'value' => 4,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_01->id,
            'text' => 'University post- graduate',
            'value' => 5,
        ]);

        $question_02 = \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' =>'employment',
            'text' => 'What is your current employment status?',
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_02->id,
            'text' => 'Working full time or part time',
            'value' => 1,
        ]);
        $answer = \App\Models\Answer::create([
            'question_id' => $question_02->id,
            'text' => 'Unemployed',
            'value' => 2,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_02->id,
            'text' => 'Retired',
            'value' => 3,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_02->id,
            'text' => 'Student',
            'value' => 4,
        ]);

        $question_03 = \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'digital_apps',
            'text' => 'Do you use any digital apps to help you to manage your Diabetes?',
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_03->id,
            'text' => 'No',
            'value' => 0,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_03->id,
            'text' => 'Yes',
            'value' => 1,
        ]);

        $question_04 = \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' =>'social_media',
            'text' => 'Do you use any social media platforms eg Facebook, Twitter or Instagram to help you to manage your Diabetes?',
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_04->id,
            'text' => 'No',
            'value' => 0,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_04->id,
            'text' => 'Yes',
            'value' => 1,
        ]);

        $question_05 = \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'patient_communities',
            'text' => 'Do you belong to any on line Patient Communities related to your Diabetes?',
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_05->id,
            'text' => 'No',
            'value' => 0,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_05->id,
            'text' => 'Yes',
            'value' => 1,
        ]);

        $question_06 = \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' =>'nutrition',
            'text' => 'On how many of the last SEVEN DAYS did you use recipe search or finders to guide your nutrition?',
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '0',
            'value' => 0,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '1',
            'value' => 1,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '2',
            'value' => 2,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '3',
            'value' => 3,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '4',
            'value' => 4,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '5',
            'value' => 5,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '6',
            'value' => 6,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_06->id,
            'text' => '7',
            'value' => 7,
        ]);

        $question_07 = \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'mobility',
            'text' => 'Which of the following are your transporation methods? Please check all that are applicable',
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_07->id,
            'text' => 'Not applicable',
            'value' => 1,
        ]);

        $answer = \App\Models\Answer::create([
            'question_id' => $question_07->id,
            'text' => 'public transport',
            'value' => 2,
        ]);


        $answer = \App\Models\Answer::create([
            'question_id' => $question_07->id,
            'text' => 'car include motor bikes',
            'value' => 3,
        ]);


        $answer = \App\Models\Answer::create([
            'question_id' => $question_07->id,
            'text' => 'bicycle',
            'value' => 4,
        ]);


        $answer = \App\Models\Answer::create([
            'question_id' => $question_07->id,
            'text' => 'other',
            'value' => 5,
        ]);
    }
}
