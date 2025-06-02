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
Route::get('/post-item/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/post/update/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');
