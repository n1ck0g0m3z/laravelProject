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

Route::get('/', function () {
    return view('welcome');
});

Route::get('apps','Controller@logIn');

Route::get('about','PagesController@about');

Route::get('log','PagesController@logIn');

Route::get('new','PagesController@add');

Route::get('addMoney','PagesController@addMoney');

Route::get('money','PagesController@moneyList');

Route::get('aboutPage','PagesController@aboutPage');

Route::get('test','PagesController@app');

Route::get('contact','PagesController@contact');