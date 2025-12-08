<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\IsAdmin;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

// Beranda
Route::get('/', [PageController::class, 'home'])->name('home');

// Tentang
Route::get('/tentang', [PageController::class, 'about'])->name('about');

// Program atau Kegiatan (sesuaikan nama)
Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');

// Jadwal (jika ada)
Route::get('/jadwal', [PageController::class, 'schedule'])->name('schedule');

// Pengurus
Route::get('/pengurus', [PageController::class, 'team'])->name('team');

// Kontak
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Panel (Protected by Auth + IsAdmin)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {

    // Dashboard
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('admin.dashboard');

    // Kegiatan CRUD
    Route::get('/kegiatans', [App\Http\Controllers\Admin\KegiatanController::class, 'index'])
        ->name('admin.kegiatans.index');
    Route::get('/kegiatans/create', [App\Http\Controllers\Admin\KegiatanController::class, 'create'])
        ->name('admin.kegiatans.create');
    Route::post('/kegiatans', [App\Http\Controllers\Admin\KegiatanController::class, 'store'])
        ->name('admin.kegiatans.store');
    Route::get('/kegiatans/{kegiatan}/edit', [App\Http\Controllers\Admin\KegiatanController::class, 'edit'])
        ->name('admin.kegiatans.edit');
    Route::put('/kegiatans/{kegiatan}', [App\Http\Controllers\Admin\KegiatanController::class, 'update'])
        ->name('admin.kegiatans.update');
    Route::delete('/kegiatans/{kegiatan}', [App\Http\Controllers\Admin\KegiatanController::class, 'destroy'])
        ->name('admin.kegiatans.destroy');

    // Pengurus CRUD
    Route::get('/pengurus', [App\Http\Controllers\Admin\PengurusController::class, 'index'])
        ->name('admin.pengurus.index');
    Route::get('/pengurus/create', [App\Http\Controllers\Admin\PengurusController::class, 'create'])
        ->name('admin.pengurus.create');
    Route::post('/pengurus', [App\Http\Controllers\Admin\PengurusController::class, 'store'])
        ->name('admin.pengurus.store');
    Route::get('/pengurus/{penguru}/edit', [App\Http\Controllers\Admin\PengurusController::class, 'edit'])
        ->name('admin.pengurus.edit');
    Route::put('/pengurus/{penguru}', [App\Http\Controllers\Admin\PengurusController::class, 'update'])
        ->name('admin.pengurus.update');
    Route::delete('/pengurus/{penguru}', [App\Http\Controllers\Admin\PengurusController::class, 'destroy'])
        ->name('admin.pengurus.destroy');

    // Highlights CRUD
    Route::get('/highlights', [App\Http\Controllers\Admin\HighlightController::class, 'index'])
        ->name('admin.highlights.index');
    Route::get('/highlights/create', [App\Http\Controllers\Admin\HighlightController::class, 'create'])
        ->name('admin.highlights.create');
    Route::post('/highlights', [App\Http\Controllers\Admin\HighlightController::class, 'store'])
        ->name('admin.highlights.store');
    Route::get('/highlights/{highlight}/edit', [App\Http\Controllers\Admin\HighlightController::class, 'edit'])
        ->name('admin.highlights.edit');
    Route::put('/highlights/{highlight}', [App\Http\Controllers\Admin\HighlightController::class, 'update'])
        ->name('admin.highlights.update');
    Route::delete('/highlights/{highlight}', [App\Http\Controllers\Admin\HighlightController::class, 'destroy'])
        ->name('admin.highlights.destroy');
});
