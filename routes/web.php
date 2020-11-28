<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Middleware\IsAdmin;

use App\Http\Livewire\Admin\ {
    Dashboard as AdminDashboard,
    Users as AdminUsers,
    User\Show as AdminUserShow,
    Releases as AdminReleases,
    Release\Show as AdminReleaseShow
};

use App\Http\Livewire\App\ {
    Dashboard as AppDashboard,
    Releases as AppReleases,
    Release\Upload as AppReleaseUpload
};

use App\Http\Livewire\Inbox\ {
    Index as InboxIndex,
    Create as InboxCreate
};

use App\Http\Controllers\ {
    HomeController,
    Auth\LoginController,
    TermsOfServiceController,
    SongController
};

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

Route::get('/', [HomeController::class, 'render']);

Route::get('dashboard', function () {
    return redirect('redirects');
})->name('dashboard');

Route::get('auth/{provider}', [LoginController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [LoginController::class, 'handleProviderCallback']);

// TOS route
Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');

// Inbox routes
Route::middleware(['auth:sanctum', 'verified'])->prefix('inbox')->group(function () {
    Route::get('/', InboxIndex::class)->name('inbox.index');
    Route::get('create', InboxCreate::class)->name('inbox.create');
    // Route::post('store', [InboxController::class, 'store'])->name('inbox.admin.store');
    // Route::post('{thread}/reply', [InboxController::class, 'reply'])->name('inbox.admin.reply');
    // Route::get('{thread}', [InboxController::class, 'show'])->name('inbox.admin.show');
    // Route::delete('{thread}/destroy', [InboxController::class, 'destroy'])->name('inbox.admin.destroy');
});

// Admin only routes
Route::middleware(['auth:sanctum', 'verified', IsAdmin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class);
    Route::get('/users', AdminUsers::class);
    Route::get('/user/{id}', AdminUserShow::class);
    Route::get('/releases', AdminReleases::class);
    Route::get('/release/{id}.zip', [AdminReleaseShow::class, 'downloadRelease']);
    Route::get('/release/{id}', AdminReleaseShow::class);
});


Route::middleware(['auth:sanctum', 'verified'])->prefix('app')->group(function() {
    Route::get('/dashboard', AppDashboard::class);
    Route::get('/releases', AppReleases::class);
    Route::get('/release/upload', AppReleaseUpload::class);
    Route::post('song/upload', [SongController::class, 'store'])->name('song.upload');
});

Route::get('redirects', [HomeController::class, 'redirects']);
