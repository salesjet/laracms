<?php
Route::group(['namespace'=>'Salesjet\Laracms\Http\Controllers'], function(){
    Route::get('laracms/test', 'TestController@index');
});