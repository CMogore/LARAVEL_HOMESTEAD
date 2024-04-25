<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});




// Routing: Define routes to handle HTTP requests
Route::get('/', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');

