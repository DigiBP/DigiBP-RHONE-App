<?php

return [
    'version' => '10.12.2019',

    'camunda' => [

        'domain' => env('CAMUNDA_DOMAIN','https://digibp-rhone.herokuapp.com'),

        'post_registration' => '/app/registration',
        'post_application' => '/app/application'

    ],

    'applications_enabled' => env('APPLICATIONS_ENABLED', false)

];
