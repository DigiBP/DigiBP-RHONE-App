<?php

namespace App\Http\Controllers;


use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */

    public function handle()
    {
        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

        $configuration = [

            'telegram' => [
                'token' => config('botman.telegram.token')
            ]
        ];

        $botman = BotManFactory::create($configuration);

        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'hi') {
                $this->askName($botman);
            }else{
                $botman->reply("write 'hi' for testing...");
            }
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */

    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);

        });
    }
}
