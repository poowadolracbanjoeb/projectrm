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
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/files/create','DocumentController@create');

Route::post('/files','DocumentController@store');

Route::get('/files','DocumentController@index');
Route::get('/files/{id}','DocumentController@show');
 
Route::get('/files/download/{file}','DocumentController@download');
