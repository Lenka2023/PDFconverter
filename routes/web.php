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
Route::post('editor', 'PDFController@Convert_to_htm12');
//Route::get('/uploadfile','UploadFileController@index');
//Route::post('/uploadfile','UploadFileController@showUploadFile');
//Route::get('editor','EditorController@uploadFile');
//Route::get('/editor','EditorController@edit');
//Route::post('/editor','EditorController@showUploadFile');
Route::get('editor', 'PDFController@index');
//Route::post('editor', 'PDFController@showUploadFile');
//Route::post('editor', 'PDFController@store');
//Route::get('show_html', 'PDFController@Convert_to_htm12');
