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

Route::get('/dashboard', 'CrmController@index');
Route::get('/', 'CrmController@log');
Route::get('/email', 'CrmController@mail');
Route::get('/reset', 'CrmController@rset');
Route::get('/register', 'CrmController@reg');
Route::post('/login', 'CrmController@authenticate');
Route::post('/registerStep1', 'CrmController@registerStep1');
Route::post('/message', 'CrmController@setMessage');
Route::get('/chatbox', 'CrmController@getChatbox');
Route::get('/Table', 'CrmController@tables');
Route::get('/Form', 'CrmController@forms');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


