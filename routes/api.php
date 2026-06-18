<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\V1\PostController as V1PostController;
use App\Http\Controllers\Api\V2\PostController as V2PostController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello',function(){
    return ["message"=>"Hello Laravel "];
});

// Route::get('/posts',[PostController::class,"index"])->name('posts.index');
// Route::post('/posts',[PostController::class,"store"])->name('store.index');
// Route::get('/posts/{id}',[PostController::class,"show"])->name('posts.show');

// Route::apiResource('posts', PostController::class);

// version 

// Route::prefix('v1')->group(function () {
//     Route::apiResource('posts', PostController::class);
// });

Route::prefix('v1')->group(function () {
    Route::apiResource('posts', V1PostController::class);
});


Route::prefix('v2')->group(function () {
    Route::apiResource('posts', V2PostController::class);
});
