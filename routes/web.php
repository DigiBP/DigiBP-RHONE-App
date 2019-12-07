<?php

Auth::routes(['login' => true, 'register' => false, 'reset' => true, 'verify' => false]);

Route::get('/', 'StartController@index')->name('start.index');

Route::post('/registration', 'RegistrationController@store')->name('registration.store');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/app/dashboard', 'App\DashboardController@index')->name('dashboard.index');
});
