<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Middleware\IsAdmin;

use App\Http\Livewire\Admin\ {
    Dashboard as AdminDashboard,
    Users as AdminUsers,
    User\Show as AdminUserShow,
    Releases as AdminReleases
};

use App\Http\Livewire\App\Dashboard as AppDashboard;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

// Wildcard route for angular to catch app pages
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/app/{anything?}', function ($anything = null) {
        return view('app');
    })->where('anything', '(.*)');

// Admin only routes
Route::middleware(['auth:sanctum', 'verified', IsAdmin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class);
    Route::get('/users', AdminUsers::class);
    Route::get('/user/{id}', AdminUserShow::class);
    Route::get('/releases', AdminReleases::class);
});


Route::middleware(['auth:sanctum', 'verified'])->prefix('app')->group(function() {
    Route::get('/dashboard', AppDashboard::class);
});

Route::get('redirects', 'App\Http\Controllers\HomeController@index');
