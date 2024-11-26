<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;

Route::get('/welcome', function () {
    return view('welcome');
});


//ViewController
Route::get('/', [ViewController::class,'index'])->name('index');

//PostController
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class,'store'])->name('posts.store');
