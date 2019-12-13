<?php

use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your appli cation. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/post/{id}','PostsController@index');

Route::resource('posts','PostsController');

// Route::get('/contact','PostsController@contact');

// Route::get('/post/{id}/{name}','PostsController@post');


// Route::get('/ayyy',function(){
//     DB::insert('insert into posts(title,body) values (?,?)',['string','drmex']);
// });

// Route::get('/read',function(){
//     $resault = DB::select('select * from posts where id=?',['1']);
//     foreach($resault as $post){
//         return $post->title;
//     }
// });

// Route::get('/update',function(){
//     $update = DB::update('update posts set title="drmexino" where id=?',[1]);
//     return $update;
// });

// Route::get('/delete',function(){
//     $delete = DB::delete('delete from posts where id=?',[1]);
//     return $delete;
// });

// Route::get('/drmex',function(){
//     return "DJESI DRMEXXXXXXX";
// });

// Route::get('/post/{id}',function($id){
//         return "Ovo je post ".$id;
// });


//ELOQUENT MODELI

// Route::get('/model',function(){
    
//     $posts = Post::where('title','string')->orderBy('id','desc')->take(3);


//     foreach($posts as $post){
//         echo $post->id."<br>";
//     }
// });

// Route::get('/firstorfail',function(){
    
//     $posts = Post::firstOrFail(1);
//     echo $posts->title;

//     $posts = Post::where('id','>','5')->findOrFail(1);

//     echo $posts->title;

//     foreach($posts as $post){
//         echo $post->title."<br>";
//     }
// });

// Route::get('/insert',function(){
//     $post = new Post;

//     $post->title = 'drmex';
//     $post->body = 'kazu da me ostavljas';

//     $post->save();
// });

// Route::get('/insertdrugi',function(){
    
//     Post::create(['user_id'=>'1','title'=>'Drmexxx','body'=>'srkt srkt']);

// });

// Route::get('/setadmin',function(){
    
//     $post = Post::where('id',2)->where('is_admin',0)->update(['title'=>'promena naslova']);
// });

// Route::get('/delete',function(){
//     $post = Post::find(1);
//     $post->delete();
// });

// Route::get('/softdelete',function(){

//     $post = Post::onlyTrashed()->get();

//     echo $post;
// });

// Route::get('/restore',function(){
//     Post::withTrashed()->restore();

// });

Route::get('/forcedelete',function(){
    Post::where('id',3)->forceDelete();
});



Route::get('/user/{id}/post',function($id){

    return User::find(2)->post->title;

});