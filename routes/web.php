<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PertanyaanController@index')->name('pertanyaan.index');
Route::get('/create', 'PertanyaanController@create');
Route::post('/', 'PertanyaanController@store');
Route::get('/{id}/edit', 'PertanyaanController@edit');
Route::put('/{id}', 'PertanyaanController@update');
Route::delete('/{id}', 'PertanyaanController@delete');

Route::get('/jawaban/{id}', 'JawabanController@index')->name('jawaban.index');
Route::post('/jawaban/{id}', 'JawabanController@store');

