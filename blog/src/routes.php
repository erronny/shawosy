<?php
use Illuminate\Support\Facades\Route;


Route::get('/post', 'Shawosy\Blog\Controllers\BlogController@index')->name('blog');
Route::get('/Posts/{post}', 'Shawosy\Blog\Controllers\BlogController@post');

Auth::routes();
// Route::group(['middleware' => ['auth', 'clearance']], function() {
Route::group(['prefix' => 'admin'], function () {
		// Posts routes
    Route::resource('/posts', 'Shawosy\Blog\Controllers\PostController');
    Route::get('posts/{id}/delete','Shawosy\Blog\Controllers\PostController@destroy');

    Route::get('updatePost/{id}/{key}',"Shawosy\Blog\Controllers\PostController@updatePost");
    
 // });
 });   
   





