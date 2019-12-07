<?php

namespace App\Http\Controllers\Chatbot;

use App\Http\Controllers\Controller;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'Start') {

                $this->askName($botman);

            }else{
                $botman->reply("Write 'Start' to begin with the registration process.");
            }

        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */

    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function($botman, Answer $answer) {

            $name = $answer->getText();
            $this->askAge($botman, $name);

        });
    }

    /**
     * Place your BotMan logic here.
     */

    public function askAge($botman, $name)
    {


        $botman->say('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
    }
}
