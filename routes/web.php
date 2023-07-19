<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KelahiranController;
use App\Http\Controllers\Admin\KematianController;
use App\Http\Controllers\Admin\PendatangController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\PindahController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::prefix('/admin')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::resource('/penduduk', PendudukController::class);
        Route::resource('/pindah', PindahController::class);
        Route::resource('/pendatang', PendatangController::class);
        Route::resource('/kematian', KematianController::class);
        Route::resource('/kelahiran', KelahiranController::class);

    });
});
