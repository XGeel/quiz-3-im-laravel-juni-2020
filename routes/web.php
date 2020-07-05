<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/erd');
});

Route::get('/artikel','ArticleController@show');
Route::get('/artikel/create','ArticleController@form_create');
Route::post('/artikel','ArticleController@store');
Route::get('/artikel/{article_id}','ArticleController@show_by_id');
Route::get('/artikel/{article_id}/edit','ArticleController@form_edit');
Route::put('/artikel/{article_id}','ArticleController@update');
Route::delete('/artikel/{article_id}','ArticleController@destroy');