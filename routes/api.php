<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello',function(){
    return ["message"=>"Hello Laravel "];
});

Route::get('/posts',[PostController::class,"index"])->name('posts.index');
Route::post('/posts',[PostController::class,"store"])->name('store.index');
