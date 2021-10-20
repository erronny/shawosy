<?php
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::group(['middleware' => ['web']], function() {
Route::group(['prefix' => 'admin'], function () {
		  Route::resource('/categories', 'Shawosy\Category\Controllers\CategoryController', ['except' => ['show']]);
    Route::get('categories/{id}/delete','Shawosy\Category\Controllers\CategoryController@destroy');

    Route::resource('/subcategories', 'Shawosy\Category\Controllers\SubcategoryController', ['except' => ['show']]);
    Route::get('subcategories/{id}/delete','Shawosy\Category\Controllers\SubcategoryController@destroy');


});

});