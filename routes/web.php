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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController'); //map posts to controller so that we have all the functions of controller

/*
Route::get('/users/{id}/{name}', function($id,$name){
    return 'This is user '.$name.' with an id '.$id;
});

Route::get('/hello', function () {
    //return view('welcome');
    return "Hello World!";
});


*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
