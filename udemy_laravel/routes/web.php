<?php

use App\Country;
use App\Post;
use App\User;
use App\Role;
use App\Photo;
use App\Tag;
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

// Route::get('/contact', function () {
//     return view('contact');
// });

// //Route::get('/post/{id}','PostController@index');
// Route::resource('posts','PostController');


// Route::get('/insert',function(){

//    DB::insert('insert into posts(title,body) values(?,?)',['laravel amazing','laravel is the best thing php']);



// });

// Route::get('/read', function(){
//    $results = DB::select('select * from posts where id=?',[1]);
//          return $results;
//    // foreach($results as $post){
//    // 	return $post->title;
//    // }
// });


// Route::get('/update',function(){
//      $updated = DB::update('update posts set title= "update title" where id=?',[1]);

//      return $updated;

// });

// Route::get('/delete', function(){


//     $deleted = DB::delete('delete from posts where id=?',[1]);

//     return $deleted;
// });


// Eloquient

// Route::get('/find', function(){
    
//  $post = Post::find(1)->get();


//  foreach($post as $posts){

//  return $posts->title;


//  }

// });


// Route::get('/findwhere',function(){


//   $posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();

//   return $posts;
// });


// Route::get('/findmore', function(){
   
//    $posts = Post::findOrFail(1);
//    return $posts;

// });

// Route::get('basicinsert', function(){
   
//    $post = new Post;

//    $post->title = "New Eloquent title insert";
//    $post->body = "New Eloquent Body Here";

//    $post->save();
// });

// Route::get('/basicfind', function(){
   
//    $post =Post::find(1);

//    $post->title = "New Eloquent title insert 2";
//    $post->body = "New Eloquent Body Here 2";

//    $post->save();
// });

// Route::get('/create',function(){
//     Post::create(['title'=>'the create method', 'body'=>'wow i ám learning laravel']);
// });

// Route::get('/update', function(){
//     Post::where('id',2)->update(['title'=>'the create method', 'body'=>'wow i\'ám learning php']);
// });


// Route::get('/delete',function(){

//  $posts = Post::find(1);
//  $posts->delete();
// });


// Route::get('/delete',function(){

//  Post::destroy(4);
// });



// Route::get('/softdelete',function(){

//      Post::find(3)->delete();

// });


// Route::get('/restore',function(){
//    Post::withTrashed()->where();
// });  


// Rloquient relationship

 // one to one relationship
 // Route::get('/user/{id}/post', function($id){
    
 //    return User::find($id)->post->body;

 // });

 // Route::get('/post/{id}/user', function($id){
   
 //   return Post::find($id)->user->name;

 // });

// one to many relationship

// Route::get('/postss', function(){

//    $user = User::find(1);
//    foreach($user->postde as $post){

//    return  $post->title ."<br/>";
//    }



// });

//many to many relationship

// Route::get('/user/{id}/role', function($id){
  
//    $user = User::find($id)->roles()->orderBy('id','desc')->get();
     
//      return $user;
//    // foreach($user->roles as $role){
//    // 	return $role->name;
//    // }

// });

//Accessing the intermidiate table

// Route::get('user/pivot', function(){

//    $user = User::find(1);

//    foreach ($user->roles as $role){
//    	 return $role->pivot->created_at;
//    }

// });


// Route::get('/user/country',function(){


//    $country = Country::find(3);

//    foreach($country->posts as $post){
//    	return $post->title; 
//    }
   
// });


//polymorpic relationship


// Route::get('post/photos', function(){

//   $Post = Post::find(2);

// foreach($Post->photos as $photo){

//     return $photo;
// }
// });


// Route::get('photo/{id}/post', function($id){
    
//     $photo = Photo::findOrfail($id);

//     return  $photo->imageable_id;


// });

  //polymorpic many to many 

// Route::get('/post/tag',function(){
//     $post = Tag::find(1);

//        return $post->posts;
    
// });










 