<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('homepage');
Route::get('/hero', 'HeroController@index');
Route::get('/hero/{slug}', 'HeroController@show');

//create form
Route::post('/hero/store', 'HeroController@store');
//Route::post('/questions', 'QuestionController@store')->middleware('auth');