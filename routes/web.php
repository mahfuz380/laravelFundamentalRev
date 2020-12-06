<?php

use App\Post;

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

//         DB::insert('insert into posts(title, content) values(?, ?)', ['Php with laravel 3','laravel best 3']);


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

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id =?', [1]);
//     return $deleted;
// });

/*
|--------------------------------------------------------------------------
| Eloquent ORM
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){

//     $posts = Post::all();
//     foreach($posts as $post){
//         return $post->title;
//     }
// });

// Route::get('/find', function(){
//     $post = Post::find(2);
//     return $post->title;
// });

// Route::get('/findwhere',function(){
//     $posts = Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;
// });

// Route::get('/findmore', function(){
//     // $posts = Post::findOrFail(2);
//     $posts = Post::where('users_count', '<', 50)->firstOrFail();
//     return $posts;
// });

// Route::get('/basicinsert', function(){

//     $post = new Post;
//     $post->title = 'new Orm title';
//     $post->content = 'wou eloquent is cool';

//     $post->save();

// });

// Route::get('/basicupdate', function(){
//     $post = Post::find(2);

//     $post->title = 'updated title';
//     $post->content = 'updated content';

//     $post->save();


// });

// Route::get('/create',function(){
//     Post::create(['title'=>'the create method', 'content'=>'created content']);
// });

// Route::get('/update', function(){
//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New Title', 'content'=>'I love my instructor']);
// });

// Route::get('/delete', function(){
//     Post::where('id', 2)->delete();
// });

// Route::get('/delete2', function(){
//     $post = Post::find(1);

//     $post->delete();
// });

// Route::get('/delete3', function(){
//     Post::destroy(3);
// });

Route::get('/softdelete', function(){

    Post::find(4)->delete();
});