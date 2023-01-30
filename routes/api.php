<?php

use App\Http\Controllers\incomingApi\AuthController;
use App\Http\Controllers\incomingApi\CategoryController;
use App\Http\Controllers\incomingApi\ClientController;
use App\Http\Controllers\incomingApi\NewsClientController;
use App\Http\Controllers\incomingApi\ReflectionController;
use App\Http\Controllers\incomingApi\KeywordsController;
use App\Http\Controllers\incomingApi\MediaController;
use App\Http\Controllers\incomingApi\NewsController;
use App\Http\Controllers\incomingApi\ReflectionKeywordsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API Public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


// API Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    // logout route
    Route::post('/logout', [AuthController::class, 'logout']);

    // Client routes
    Route::resource('/client', ClientController::class);

    // NewsClient routes
    Route::resource('/newsClient', NewsClientController::class);

    // Reflection routes
    Route::resource('/reflection', ReflectionController::class);

    // Keywords routes
    Route::resource('/keywords', KeywordsController::class);

    // Category routes
    Route::resource('/category', CategoryController::class);

    // Media routes
    Route::resource('/media', MediaController::class);

    // Reflection keywords routes
    Route::resource('/reflectionKeywords', ReflectionKeywordsController::class);

    // News routes
    Route::resource('/news', NewsController::class);

});