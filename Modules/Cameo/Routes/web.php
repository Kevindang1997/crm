<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('cameo')->group(function() {
    Auth::routes();
    Route::get('/', 'CameoController@index');
    
    Route::prefix('category')->group(function() {
        Route::get('/', 'CategoryController@index');
        Route::get('create', 'CategoryController@create');
        Route::post('store', ['as'=>'category-store','uses'=>'CategoryController@store']);
    });
});
