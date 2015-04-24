<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('issues', 'IssuesController@index');
Route::get('knowledge-base', function() {
    return view('knowledge-base');
});

Route::get('home', function() {
    redirect('indicators');
});

Route::resource('indicators', 'IndicatorsController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


