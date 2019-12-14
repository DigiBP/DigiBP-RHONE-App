<?php

Auth::routes(['login' => true, 'register' => false, 'reset' => true, 'verify' => false]);

Route::get('/', 'App\StartController@index')->name('start.index');
Route::get('/documentation', 'App\DocumentationController@index')->name('documentation.index');

Route::get('/registration', 'App\RegistrationController@index')->name('registration.index');
Route::post('/registration', 'App\RegistrationController@store')->name('registration.store')->middleware(\Spatie\Honeypot\ProtectAgainstSpam::class);

Route::middleware(['auth'])->group(function ()
{
    Route::get('/dashboard', 'App\DashboardController@index')->name('dashboard.index');

    Route::get('/profile/update', 'App\ProfileController@update')->name('profile.update');

    Route::get('/application/surveys/{survey}', 'App\SurveysController@show')->name('surveys.show');
    Route::post('/application/surveys/{survey}', 'App\SurveysController@store')->name('surveys.store');

    Route::post('/application/submit', 'App\ApplicationController@index')->name('application.submit');

});


Route::get('/debug/patients', 'Debug\PatientsController@index')->name('debug.patients.index');

Route::get('/debug/patients/approve/{patient}', 'Debug\PatientsController@approve')->name('debug.patients.approve');
Route::get('/debug/patients/decline/{patient}', 'Debug\PatientsController@decline')->name('debug.patients.decline');

Route::get('/debug/patients/demography/approve/{patient}', 'Debug\PatientsController@approve')->name('debug.demography.approve');
Route::get('/debug/patients/demography/decline/{patient}', 'Debug\PatientsController@decline')->name('debug.demography.decline');

Route::get('/debug/patients/diabetes/approve/{patient}', 'Debug\PatientsController@approve')->name('debug.diabetes.approve');
Route::get('/debug/patients/diabetes/decline/{patient}', 'Debug\PatientsController@decline')->name('debug.diabetes.decline');

Route::get('/debug/patients/delete/{patient}', 'Debug\PatientsController@delete')->name('debug.patients.delete');

