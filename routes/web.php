<?php

use App\Http\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Articles;
use App\Http\Controllers\TinyUploadController;
use UniSharp\LaravelFilemanager\Lfm;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//filemanager route
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});

/*************** Article Routes *********************/
//admin only manage articles page
Route::get('manage-articles', Articles::class)->middleware('auth')->name('articles.manage');

//tinymce image upload
Route::post('/upload', 'App\Http\Controllers\TinyUploadController@upload');

//view single article
Route::get('/articles/{article}', 'App\Http\Livewire\ShowArticle@show')->name('article.show');

//public article listing
Route::get('/articles', 'App\Http\Livewire\Articles@index')->name('articles.index');





