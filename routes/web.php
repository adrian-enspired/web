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

Route::get('/', function () {
    return view('welcome');
});

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/app/{anything?}', function ($anything = null) {
        return View::make('app');
    })->name('app');

Route::middleware(['auth:sanctum', 'verified', IsAdmin::class])
    ->get('/admin/{anything?}', function ($anything = null) {
        return View::make('admin');
    })->name('admin');
