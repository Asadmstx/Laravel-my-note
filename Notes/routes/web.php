<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/list', function () {
//     return view('list');
// })->name('list');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::post(
    '/add/submit',
    'App\Http\Controllers\AddnoteController@submit'
)->name('add-submit');

Route::get(
    '/list',
    'App\Http\Controllers\AddnoteController@getData'
)->name('list');

Route::get(
    '/list/{id}',
    'App\Http\Controllers\AddnoteController@editData'
)->name('note-edit');

Route::post(
    '/list/{id}',
    'App\Http\Controllers\AddnoteController@editDataSubmit'
)->name('edit-submit');

Route::get(
    '/list/{id}/delete',
    'App\Http\Controllers\AddnoteController@deleteData'
)->name('note-delete');
