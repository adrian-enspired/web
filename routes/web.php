<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Middleware\IsAdmin;

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

// Wildcard route for angular to catch app pages
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/app/{anything?}', function ($anything = null) {
        return View::make('app');
    })->where('anything', '(.*)');

// Wildcard route for angular to catch on admin pages
Route::middleware(['auth:sanctum', 'verified', IsAdmin::class])
    ->get('/admin/{anything?}', function ($anything = null) {
        return View::make('admin');
    })->where('anything', '(.*)');

Route::get('/', function () {
    return view('welcome');
});

Route::get('redirects', 'App\Http\Controllers\HomeController@index');
