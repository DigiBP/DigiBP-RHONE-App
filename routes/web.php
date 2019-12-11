<?php

Auth::routes(['login' => true, 'register' => false, 'reset' => true, 'verify' => false]);

Route::get('/', 'App\StartController@index')->name('start.index');

Route::get('/registration', 'App\RegistrationController@index')->name('registration.index');
Route::post('/registration', 'App\RegistrationController@store')->name('registration.store')->middleware(\Spatie\Honeypot\ProtectAgainstSpam::class);

Route::get('/diagnosis', 'App\DiagnosisController@index')->name('diagnosis.index');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/dashboard', 'App\DashboardController@index')->name('dashboard.index');

    Route::post('/profile/update', 'App\ProfileController@update')->name('profile.update');
    Route::get('/profile/gender/{patient}', 'App\ProfileController@gender')->name('profile.gender');
    Route::get('/application/create/{patient}', 'App\ApplicationController@create')->name('application.create');

    Route::get('/application/demography', 'App\DemographyController@index')->name('application.demography.index');
    Route::post('/application/demography', 'App\DemographyController@update')->name('application.demography.update');

    Route::get('/application/diabetes', 'App\DiabetesController@index')->name('application.diabetes.index');
    Route::post('/application/diabetes', 'App\DiabetesController@update')->name('application.diabetes.update');

    Route::post('/application/submit', 'App\DemographyController@index')->name('application.submit');




});

Route::get('/debug/patients', 'Debug\PatientsController@index')->name('debug.patients.index');
Route::get('/debug/patients/approve/{patient}', 'Debug\PatientsController@approve')->name('debug.patients.approve');
Route::get('/debug/patients/decline/{patient}', 'Debug\PatientsController@decline')->name('debug.patients.decline');

/*Route::get('/debug/patients/demography/approve/{patient}', 'Debug\DemographyController@approve')->name('debug.demography.approve');
Route::get('/debug/patients/demography/decline/{patient}', 'Debug\DemographyController@decline')->name('debug.demography.decline');

Route::get('/debug/patients/diabetis/approve/{patient}', 'Debug\DiabetisController@approve')->name('debug.diabetis.approve');
Route::get('/debug/patients/diabetis/decline/{patient}', 'Debug\DiabetisController@decline')->name('debug.diabetis.decline');*/

Route::get('/debug/patients/delete/{patient}', 'Debug\PatientsController@delete')->name('debug.patients.delete');

