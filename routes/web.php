<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\VerificationController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'userstatus'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('agenda', [AgendaController::class, 'index'])->name('agenda');
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index_admin'])->name('admin.index');
        Route::get('participants', [ParticipantController::class, 'viewParticipants'])->name('participants');
        Route::get('verification', [VerificationController::class, 'verificationPage'])->name('verification');
        Route::post('users/{user}/toggle-status', [VerificationController::class, 'toggleStatus'])->name('toggle-status');
        Route::get('agenda', [AgendaController::class, 'index_admin'])->name('agenda-admin');
        Route::post('agenda', [AgendaController::class, 'store'])->name('create-agenda');
        Route::post('/agenda/{id}/regenerate-kode-absensi', [AgendaController::class, 'change_code'])->name('change-code');
        Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement-admin');
        Route::get('/create-announcement', [AnnouncementController::class, 'create'])->name('create-announcement-admin');
        Route::post('/create-announcement', [AnnouncementController::class, 'store'])->name('store-announcement');
        Route::delete('/announcement/{id}/delete', [AnnouncementController::class, 'delete_announcement'])->name('delete-announcement');
        Route::get('/assignment', [AssignmentController::class, 'index_admin'])->name('assignment-admin');
    });
});

Route::get('/editor', function () {
    return view('other.editor');
})->name('editor-page');
Route::get('/unverified', [DashboardController::class, 'unverified'])->name('unverified');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
Route::get('/register', function () {
    return redirect('/login');
})->name('register-page');
Route::post('register', [RegisterController::class, 'store'])->name('register-create');
