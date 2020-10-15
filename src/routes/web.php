<?php

Route::group(['namespace' => 'duncanrmorris\units\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){
    
        
	Route::get('units', 'UnitsController@index')->name('units');
	

   

    });
});