<?php

Auth::routes(['login' => true, 'register' => false, 'reset' => true, 'verify' => false]);

Route::get('/', 'StartController@index')->name('start.index');

Route::post('/registration', 'RegistrationController@store')->name('registration.store')->middleware(\Spatie\Honeypot\ProtectAgainstSpam::class);

Route::get('/diagnosis', 'DiagnosisController@index')->name('diagnosis.index');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/dashboard', 'App\DashboardController@index')->name('dashboard.index');
    Route::post('/profile/update', 'App\ProfileController@update')->name('profile.update');

    Route::get('/application', 'App\ApplicationController@index')->name('application.index');
    Route::post('/application/update', 'App\ApplicationController@update')->name('application.update');
    Route::get('/application/gender/{patient}', 'App\ApplicationController@gender')->name('application.gender');
});

Route::get('/debug/patients', 'Debug\PatientsController@index')->name('debug.patients.index');
Route::get('/debug/patients/approve/{patient}', 'Debug\PatientsController@approve')->name('debug.patients.approve');
Route::get('/debug/patients/decline/{patient}', 'Debug\PatientsController@decline')->name('debug.patients.decline');
Route::get('/debug/patients/delete/{patient}', 'Debug\PatientsController@delete')->name('debug.patients.delete');
