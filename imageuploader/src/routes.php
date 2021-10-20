<?php
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::group(['middleware' => ['web']], function() {
Route::group(['prefix' => 'admin'], function () {
	 // admin slider routes to 
    Route::resource('imageuploader',"Shawosy\Imageuploader\Controllers\ImageUploaderController");
    Route::get('imageuploader/{id}/delete','Shawosy\Imageuploader\Controllers\ImageUploaderController@destroy');
  
   
   });
});
    
 





