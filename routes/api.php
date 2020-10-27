<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

use App\Http\Controllers\ {
    UserController,
    ArtistController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/self', function (Request $request) {
    return $request->user();
});

// $admin_middleware = ['auth:sanctum', 'verified', IsAdmin::class];
$admin_middleware = [];
// Admin only routes
Route::middleware($admin_middleware)->prefix('admin')->group(function () {
    Route::resource('/user', UserController::class);
    Route::resource('/artist', ArtistController::class);
});

// User routes
// $user_middleware = ['auth:sanctum', 'verified'];
$user_middleware = [];
Route::middleware($user_middleware)->group(function () {

});
