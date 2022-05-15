<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',  'PostController@index')->name('post');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/create-post', 'PostController@createPost')->name('create-post')->middleware(['auth']);
    Route::post('/save-post', 'PostController@savePost')->name('save-post')->middleware(['auth']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
