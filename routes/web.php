<?php



Route::get('/', 'DefaultController@index');
Route::get('/5stars', 'FiveStarsController@index');
Route::get('/galerija', 'GalerijaController@index');
Route::get('/cjenik', 'CjenikController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home/upload', 'HomeController@multiple_upload');
