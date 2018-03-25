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
// Q3.Views:The homepage does not work because it is trying to display a template that does not exists.
// Replace the right piece of code in web.php so that it does not load welcome.blade.php but instead homepage.blade.php
//Route::get('/home', 'HomeController@index')->name('home');
// There is a link labeled "Home" in the top navigation.The link does not point anywhere now.
// Give the route that points to the homepage a name 'homepage'.Then use this name to generate the right URL address for your homepage and insert it into the top navigation.The navigation is in the layouts/app view file.
Route::get('/home', 'HomeController@index')->name('homepage');

// Creating Pages step 3) Add a route that will point to this new action when the URL /hero is accessed with GET method.view->hero/index.blade.php from index method in herocontroller
Route::get('/hero', 'HeroController@index');
Route::get('/hero/{slug}', 'HeroController@show');

//create form
Route::get('/hero/{slug}/create', 'HeroController@create');
Route::post('/hero/{slug}/store', 'HeroController@store');
//Route::post('/questions', 'QuestionController@store')->middleware('auth');