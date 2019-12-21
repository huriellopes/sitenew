<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => '/'
], function () {
    Route::get('/', 'Web\WebController@index')->name('site/inicial');
    Route::post('/enviaContact', 'Api\ApiController@enviaMailContact')->name('site.contact');
});

Route::get('/login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('/logar', 'Auth\AuthController@login')->name('login.logar');
Route::post('/logout', 'Auth\AuthController@logout')->name('login.logout');
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'Auth\AuthController@dashboard')->name('admin');
});
