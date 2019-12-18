<?php

return [
    'version' => '17.12.2019',

    'camunda' => [
        'registration_post' => env('CAMUNDA_REGISTRATION_POST'),
        'survey_post' => env('CAMUNDA_SURVEY_POST'),
    ],

    'documentation' => [

        'camunda' => 'https://digibp-rhone.herokuapp.com',
        'postman' => 'https://documenter.getpostman.com/view/1711474/SWE6cK5X',
        'github' => [
            'camunda' => 'https://github.com/DigiBP/DigiBP-RHONE',
            'app' => 'https://github.com/DigiBP/DigiBP-RHONE-App'
        ],
        'services' => [
            'gender' => 'https://gender-api.com/de/',
            'slack' => 'https://slack.com/intl/de-ch/',

        ]
    ],


];
