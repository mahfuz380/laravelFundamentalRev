<?php

use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Video;
use App\Tag;
use Carbon\Carbon;

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
    return view('welcome');
});

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

// Route::get('/softdelete', function(){

//     Post::find(6)->delete();
// });

// Route::get('/readsoftdelete', function(){
//     // $post = Post::find(4);
//     // return $post;

//     // $post = Post::withTrashed()->where('id',4)->get();

//     // return $post;

//     $post = Post::onlyTrashed()->get();

//     return $post;

// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('/forcedelete', function(){
//     Post::onlyTrashed()->where('is_admin',0)->forcedelete();
// });

/*
|--------------------------------------------------------------------------
| Eloquent relationship one to one
|--------------------------------------------------------------------------
*/

// Route::get('/user/{id}/post', function($id){

//     return User::find($id)->post->title;

// });

/*
|--------------------------------------------------------------------------
| Eloquent relationship one to one inverse
|--------------------------------------------------------------------------
*/

// Route::get('/post/{id}/user', function($id){

//     return Post::find($id)->user->name;

// });

/*
|--------------------------------------------------------------------------
| Eloquent relationship one to many
|--------------------------------------------------------------------------
*/

// Route::get('/posts', function(){
//     $user = User::find(1);

//     foreach($user->posts as $post){
//         echo $post->title;
//     }
// });

/*
|--------------------------------------------------------------------------
| Eloquent relationship many to many
|--------------------------------------------------------------------------
*/

// Route::get('/user/{id}/role',function($id){
// $user = User::find($id);

// foreach($user->roles as $role){
//     echo $role->name;
// }
// });

/*
|--------------------------------------------------------------------------
| Eloquent accessing pivet table
|--------------------------------------------------------------------------
*/

// Route::get('user/pivot', function(){
//     $user = User::find(1);

//     foreach($user->roles as $role){
//         echo $role->pivot->created_at;
//     }

// });


/*
|--------------------------------------------------------------------------
| Eloquent has many throug
|--------------------------------------------------------------------------
*/

// Route::get('/user/country', function(){
//    $country= Country::find(2);
//    foreach($country->posts as $post){
//        return $post->title;
//    }
// });

/*
|--------------------------------------------------------------------------
| Eloquent polymorphic relationship one to many
|--------------------------------------------------------------------------
*/


// Route::get('/user/photo', function(){
//     $user = User::find(1);
    
//     foreach($user->photos as $photo){
//         return $photo->path;
//     }

// });

// Route::get('/post/photo', function(){
//     $post = Post::find(1);
    
//     foreach($post->photos as $photo){
//         echo $photo->path . "<br>";
//     }

// });


/*
|--------------------------------------------------------------------------
| Eloquent polymorphic relationship one to many inverse
|--------------------------------------------------------------------------
*/


// Route::get('/photo/{id}/post', function($id){
//     $photo = Photo::findOrfail($id);
//     return $photo->imageable;

// });

/*
|--------------------------------------------------------------------------
| Eloquent polymorphic relationship many to many
|--------------------------------------------------------------------------
*/

// Route::get('/post/tag',function(){
// $post = Post::find(1);

// foreach($post->tags as $tag){
//     echo $tag->name;
// }
// });


// Route::get('/video/tag',function(){
//     $video = Video::find(1);
    
//     foreach($video->tags as $tag){
//         echo $tag->name;
//     }
//     });

    /*
|--------------------------------------------------------------------------
| Eloquent polymorphic relationship many to many inverse
|--------------------------------------------------------------------------
*/

// Route::get('/tag/post', function(){
//     $tag = Tag::find(2);
//     foreach($tag->posts as $post){
//         echo $post->title;
//     }

// });

    /*
|--------------------------------------------------------------------------
| CRUD Form Validation
|--------------------------------------------------------------------------
*/



Route::group(['middleware'=>'web'], function(){

    Route::resource('/posts', 'PostsController');

    Route::get('/dates', function(){
        $date = new DateTime('+1 week');

        echo $date->format('m-d-Y');
        echo '<br>';

        echo  Carbon::now()->addDays(10)->diffForHumans();

        echo '<br>';

        echo  Carbon::now()->subMonths(5)->diffForHumans();

    });

    Route::get('/getname', function(){
        $user = User::find(1);

        echo $user->name;
    });
    

});

