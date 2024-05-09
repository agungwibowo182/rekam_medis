<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//posts
// Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::middleware('auth:api')->group(function () {
    Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');


// Route::middleware('auth:api')->get('/users', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/users', function () {
    return Auth::user();
});

Route::middleware(['auth:api'])->group(function () {
    Route::get('/user', function (Request $request) {
        return Auth::user();
    });
});
