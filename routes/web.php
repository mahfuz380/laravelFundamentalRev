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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "hi about";
// });

// Route::get('/contact', function(){
//     return "hi contact";
// });

// Route::get('/post/{id}/{name}', function($id,$name){
//     return "this is post no". $id . " " . $name;
// });

// Route::get('/post/{id}', 'PostsController@index');

// Route::resource('posts', 'PostsController');
Route::get('/contact', 'PostsController@contact');

Route::get('/post/{name}', 'PostsController@showPost');

