<?php

Route::group(['namespace' => 'duncanrmorris\units\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){
    
        
    Route::get('units', 'UnitsController@index')->name('units');
    Route::put('units/add', 'UnitsController@store')->name('units.add');
    Route::get('units/view/{id}', 'UnitsController@show')->name('units.view');
    Route::get('units/edit/{id}', 'UnitsController@edit')->name('units.edit');
    Route::put('units/update/{id}', 'UnitsController@update')->name('units.update');

   

    });
});