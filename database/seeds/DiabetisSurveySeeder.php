<?php

use Illuminate\Database\Seeder;

class DiabetisSurveySeeder extends Seeder
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
            'title' => 'Diabetes Quality of Life',
            'description' => 'Diabetes Quality of Life survey captures your satisfaction, impact and worry related to living with the diagnosis of diabetes (Type 1 or 2).',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Satisfaction',
            'text' => 'How satisfied are you with the amount of time it takes to manage your diabetes?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Satisfaction',
            'text' => 'How satisfied are you with the amount of time you spend getting checkups?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Satisfaction',
            'text' => 'How satisfied are you with the time it takes to determine your sugar level?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Satisfaction',
            'text' => 'How satisfied are you with your current treatment?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Satisfaction',
            'text' => 'How satisfied are you with your knowledge about your diabetes?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Satisfaction',
            'text' => 'How satisfied are you with life in general?',
        ]);


        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Impact',
            'text' => 'How often do you feel pain associated with the treatment for your diabetes?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Impact',
            'text' => 'How often do you feel physically ill?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Impact',
            'text' => 'How often does your diabetes interfere with your family life?',
        ]);
        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Impact',
            'text' => 'How often do you find your diabetes limiting your social relationships and friendships?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Impact',
            'text' => 'How often do you find your diabetes limiting your sexual life?',
        ]);
        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Impact',
            'text' => 'How often do you find your diabetes limiting your life plans such as employment, education or training?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Impact',
            'text' => 'How often do you find your diabetes limiting your leisure activities or travels?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Worry',
            'text' => 'How often do you worry about whether you will pass out?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Worry',
            'text' => 'How often do you worry that your body looks different because you have diabetes?',
        ]);

        \App\Models\Question::create([
            'survey_id' => $survey->id,
            'type' => 'Worry',
            'text' => 'How often do your worry that you will get complications from your diabetes?',
        ]);


        $questions = \App\Models\Question::where('survey_id', $survey->id)->get();

        foreach ($questions as $question) {
            $index = 0;

            while ($index <= 4) {
                $index++;
                \App\Models\Answer::create([
                    'question_id' => $question->id,
                    'text' => $index,
                    'value' => $index,
                ]);
            }
        }
    }
}
