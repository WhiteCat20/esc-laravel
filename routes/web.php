<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name(
    'dashboard.index'
);

Route::get('/login', [LoginController::class, 'index'])->name('login-page');
Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
Route::

// Route::prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index'])->name(
//         'dashboard.index'
//     );
//     Route::get('/abstrak', [DashboardController::class, 'abstrak'])->name(
//         'dashboard.abstrak'
//     );
//     Route::get('/paper', [DashboardController::class, 'paper'])->name(
//         'dashboard.paper'
//     );
//     Route::get('/ppt', [DashboardController::class, 'ppt'])->name(
//         'dashboard.ppt'
//     );
//     Route::get('/author-data', [
//         DashboardController::class,
//         'authorData',
//     ])->name('dashboard.author-data');
//     Route::get('/payment', [DashboardController::class, 'payment'])->name(
//         'dashboard.payment'
//     );
//     Route::get('/sponsorship', [
//         DashboardController::class,
//         'sponsorship',
//     ])->name('dashboard.sponsorship');
// });
