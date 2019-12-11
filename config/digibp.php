<?php

return [
    'version' => '11.12.2019',

    'camunda' => [

        'domain' => env('CAMUNDA_DOMAIN','https://digibp-rhone.herokuapp.com'),

        'post_registration' => '/app/registration',
        'post_application' => '/app/application'

    ],

];
