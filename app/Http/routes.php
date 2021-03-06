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

Route::get('home','PagesController@about');

Route::get('log','PagesController@logIn');

Route::get('new','PagesController@add');

Route::get('addMoney','PagesController@addMoney');

Route::get('money','PagesController@moneyList');

Route::get('aboutPage','PagesController@aboutPage');

Route::get('test','PagesController@app');

Route::get('contact','PagesController@contact');

Route::get('withdrawal','PagesController@withdrawalList');

Route::get('subject','PagesController@subject');

Route::get('monthly','PagesController@monthly');

Route::get('userlist','PagesController@userList');

/*
Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::get('articles/{id}','ArticlesController@show');
Route::post('articles','ArticlesController@store');
Route::get('articles/{id}/edit','ArticlesController@edit');
*/
//Route::resource('users','UsersController');
Route::resource('articles','ArticlesController');

Route::get('personal','PersonalController@index');
Route::get('personal/{id}','PersonalController@get');

Route::controllers([
        'auth'=>'Auth\AuthController',
        'password'=>'Auth\PasswordController'
    ]);

Route::auth();

Route::get('/home', 'HomeController@index');