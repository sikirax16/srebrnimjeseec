<?php



Route::get('/', 'DefaultController@index');
Route::get('/5stars', 'FiveStarsController@index');
Route::get('/galerija', 'GalerijaController@index');
Route::get('/cjenik', 'CjenikController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home/upload', 'HomeController@multiple_upload');
//Insert
Route::post('/home/frizura', 'FrizureController@frizura_add');
Route::post('/home/masaza', 'MasazeController@masaza_add');
Route::post('/home/depilacija', 'DepilacijeController@depilacija_add');
//Update
Route::put('/home/frizura_up', 'FrizureController@frizura_update');
Route::put('/home/masaza_up', 'MasazeController@masaza_update');
Route::put('/home/depilacija_up', 'DepilacijeController@depilacija_update');
//Delete
Route::delete('/home/upload_de', 'HomeController@image_delete');
Route::delete('/home/frizura_de', 'FrizureController@frizura_delete');
Route::delete('/home/masaza_de', 'MasazeController@masaza_delete');
Route::delete('/home/depilacija_de', 'DepilacijeController@depilacija_delete');

//Oglas
Route::post('/home/oglas_add', 'OglasController@oglas_add');
Route::put('/home/oglas_update', 'OglasController@oglas_update');
Route::delete('/home/oglas_delete', 'OglasController@oglas_delete');