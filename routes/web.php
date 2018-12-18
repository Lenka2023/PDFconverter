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
    return view('welcome');
});

Auth::routes();
Route::get('insert', 'EditorController@edit');
Route::get('/editor', 'EditorController@edit')->name('edit');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('welcome', 'EditorController@log_out');
Route::post('editor','EditorController@insert');
Route::get('convert', 'PDFController@Convert');
Route::get('convert', 'PDFController@Convert1');
//Route::get('/pdf', 'HomeController@pdf');
Route::get('pdf', 'PDFController@pdf');
Route::get('convert', 'PDFController@Convert2');


