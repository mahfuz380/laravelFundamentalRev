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
// Route::get('/contact', 'PostsController@contact');

// Route::get('/post/{name}', 'PostsController@showPost');

/*
|--------------------------------------------------------------------------
| Database raw sql queries
|--------------------------------------------------------------------------
*/

// Route::get('/insert', function(){

//         DB::insert('insert into posts(title, content) values(?, ?)', ['Php with laravel','laravel best']);


// });

// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id = ?', [1]);
//     foreach($results as $post){

//         return $post->title;
//     }
    
// });

// Route::get('/update', function(){
//     $updated = DB::update('update posts set title = "updated title" where id =?', [1]);
//     return $updated;
// });

Route::get('/delete', function(){
    $deleted = DB::delete('delete from posts where id =?', [1]);
    return $deleted;
});