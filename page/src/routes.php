<?php
use Illuminate\Support\Facades\Route;


Route::get('/page/{page}', 'Shawosy\Page\Controllers\PageController@uipages');

Auth::routes();
Route::group(['prefix' => 'admin'], function () {
		// Posts routes
   
    
    Route::resource('/pages', 'Shawosy\Page\Controllers\PagesController');
    Route::get('updatePage/{id}/{key}',"Shawosy\Page\Controllers\PagesController@updatePage");
    
    Route::get('pages/{id}/delete','Shawosy\Page\Controllers\PagesController@destroy');

// pagecontent routes
Route::resource('/page_content_manager', 'Shawosy\Page\Controllers\PageManagerController');





});