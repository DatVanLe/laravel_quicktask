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
//show
Route::get('index', ['as' => 'index', 'uses' => 'quickController@getindex']);

//add and show asc
Route::post('add', ['as' => 'add', 'uses' => 'quickController@postadd']);
Route::get('resetindex', ['as' => 'resetindex', 'uses'=> 'quickController@getresetindex']);

