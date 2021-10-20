<?php
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::group(['middleware' => ['web']], function() {
Route::group(['prefix' => 'admin'], function () {
	 // admin slider routes to 
    Route::resource('slider',"Shawosy\Slider\Controllers\SliderController");
    Route::post('getSliderdetail',"Shawosy\Slider\Controllers\SliderController@getSliderdetail");
    Route::get('updateSlider/{id}/{key}',"Shawosy\Slider\Controllers\SliderController@updateSlider");
    Route::get('slider/{id}/delete','Shawosy\Slider\Controllers\SliderController@destroy');
   });
});
    
 





