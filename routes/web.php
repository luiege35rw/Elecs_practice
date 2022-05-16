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


//入力ページ
Route::get('/contact', 'ContactController@index')->name('contact.index');

//確認ページ
Route::get('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

//送信完了ページ
Route::get('/contact/thanks', 'ContactController@send')->name('contact.send');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');

// DB挿入、メール送信
Route::post('/process', 'ContactsController@process')->name('process');

// 完了ページ
Route::get('/complete', 'ContactsController@complete')->name('complete');