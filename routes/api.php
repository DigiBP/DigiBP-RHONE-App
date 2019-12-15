<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/registration/approve', 'API\RegistrationController@approve')
    ->middleware(\Spatie\HttpLogger\Middlewares\HttpLogger::class)
    ->name('api.registration.approve');
Route::post('/registration/decline', 'API\RegistrationController@decline')
    ->middleware(\Spatie\HttpLogger\Middlewares\HttpLogger::class)
    ->name('api.registration.decline');

Route::post('/survey/approve', 'API\SurveyController@approve')
    ->middleware(\Spatie\HttpLogger\Middlewares\HttpLogger::class)
    ->name('api.survey.approve');
Route::post('/survey/decline', 'API\SurveyController@decline')
    ->middleware(\Spatie\HttpLogger\Middlewares\HttpLogger::class)
    ->name('api.survey.decline');
