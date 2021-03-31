<?php

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
Route::get('manage-articles', Articles::class)->middleware('auth');

//tinymce image upload
Route::post('/upload', 'App\Http\Controllers\TinyUploadController@upload');





