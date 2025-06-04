<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return view('index');
});

Route::get('/item', function () {
    return view('post.item');
});
*/

Route::get('/', [PostController::class, 'index'])->name('home');

/*
Route::get('/post/item/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/post/update/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/restore/{post}', [PostController::class, 'restore'])->name('post.restore');
Route::get('/post/trashed', [PostController::class, 'trashed'])->name('post.trashed');
Route::get('/post/deletehard/{post}', [PostController::class, 'destroyHard'])->name('post.delete.hard');
*/

// Посты
Route::prefix('/post')->controller(PostController::class)->name('post.')->group(function () {
    Route::get('/item/{post}', 'show')->name('show');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{post}', 'edit')->name('edit');
    Route::patch('/update/{post}', 'update')->name('update');
    Route::delete('/delete/{post}', 'destroy')->name('destroy');
    Route::get('/restore/{post}', 'restore')->name('restore');
    Route::get('/trashed', 'trashed')->name('trashed');
    Route::get('/deletehard/{post}', 'destroyHard')->name('delete.hard');
});
