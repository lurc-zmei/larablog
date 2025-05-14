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

Route::get('/', [PostController::class, 'index']);
Route::get('/item', [PostController::class, 'show']);
