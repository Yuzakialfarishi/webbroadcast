<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/program', [PageController::class, 'program'])->name('program');
Route::get('/jadwal', [PageController::class, 'schedule'])->name('schedule');
Route::get('/pengurus', [PageController::class, 'team'])->name('team');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Auth\LoginController;

// Simple auth routes (login/logout) used by `auth` middleware
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {
	Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
	Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('admin.profile.edit');
	Route::post('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('admin.profile.update');

	Route::get('/kegiatans', [App\Http\Controllers\Admin\KegiatanController::class, 'index'])->name('admin.kegiatans.index');
	Route::get('/kegiatans/create', [App\Http\Controllers\Admin\KegiatanController::class, 'create'])->name('admin.kegiatans.create');
	Route::post('/kegiatans', [App\Http\Controllers\Admin\KegiatanController::class, 'store'])->name('admin.kegiatans.store');

	Route::get('/pengurus', [App\Http\Controllers\Admin\PengurusController::class, 'index'])->name('admin.pengurus.index');
	Route::get('/pengurus/create', [App\Http\Controllers\Admin\PengurusController::class, 'create'])->name('admin.pengurus.create');
	Route::post('/pengurus', [App\Http\Controllers\Admin\PengurusController::class, 'store'])->name('admin.pengurus.store');
});
