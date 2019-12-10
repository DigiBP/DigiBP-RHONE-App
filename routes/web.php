<?php

Auth::routes(['login' => true, 'register' => false, 'reset' => true, 'verify' => false]);

Route::get('/', 'StartController@index')->name('start.index');
Route::post('/registration', 'RegistrationController@store')->name('registration.store');

Route::get('/diagnosis', 'DiagnosisController@index')->name('diagnosis.index');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/dashboard', 'App\DashboardController@index')->name('dashboard.index');
});

Route::get('/debug/patients', 'Debug\PatientsController@index')->name('debug.patients.index');
Route::get('/debug/patients/delete/{patient}', 'Debug\PatientsController@delete')->name('debug.patients.delete');
