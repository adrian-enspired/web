<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Middleware\IsAdmin;

use App\Http\Controllers\ {
    UserController,
    Admin\ReleaseController,
    Admin\SongController
};

use App\Models\ {
    User,
    Release,
    Song
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
    Route::get('/user/{id}/releases', function (Request $request, $id) {
        try {
            $user = User::findOrFail($id);
            return $user->releases()->get();
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Resource not found'], 404);
        }
    });
    Route::get('/release/{id}/songs', function (Request $request, $id) {
        try {
            $release = Release::findOrFail($id);
            return $release->songs()->get();
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Resource not found'], 404);
        }
    });
    Route::resource('/user', UserController::class);
    Route::resource('/release', ReleaseController::class);
    Route::resource('/song', SongController::class);
});

// User routes
// $user_middleware = ['auth:sanctum', 'verified'];
$user_middleware = [];
Route::middleware($user_middleware)->group(function () {

});

Route::fallback(function(){
    return response()->json(['message' => 'Resource not found'], 404);
});
