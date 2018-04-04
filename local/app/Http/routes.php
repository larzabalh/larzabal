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

/*Route::get('/', function () {
    return view('pages/index');
});*/
Route::get('', 'FrontPageController@index');
Route::get('index', 'FrontPageController@index');
Route::get('about', 'FrontPageController@about');
Route::get('services', 'FrontPageController@services');
Route::get('portfolio', 'FrontPageController@portfolio');
Route::get('contact', 'FrontPageController@contact');
Route::get('blog', 'FrontPageController@blog');
