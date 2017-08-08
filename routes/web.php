<?php


Route::get('/', array(
    'as' => 'home', 
    'uses' => 'HomeController@index'
));
Route::get('/getLinks', array(
    'as' => 'getlinks', 
    'uses' => 'HomeController@refreshContent'
));
Route::post('/saveRequestForm', array(
    'as' => 'request-save', 
    'uses' => 'ReqController@saveRequestForm'
));

Route::post('/link/edit/{id}', array(
    'as' => 'request-save', 
    'uses' => 'ReqController@saveRequestForm'
));

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
