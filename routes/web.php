<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;  // Add this line

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});
// Replace this route
Route::get('dokter', function () {
    return view('dokter/dokter');
});

// With this route
Route::get('dokter', [DokterController::class, 'listDokter']);

Route::get('layanan', function () {
    return view('layanan/layanan');
});
Route::get('kontak', function () {
    return view('kontak/kontak');
});
Route::get('/berita', [BeritaController::class, 'listBerita'])->name('berita.index');
Route::get('/berita/{berita}', [BeritaController::class, 'showPublic'])->name('berita.show');
Route::get('dashboard', function () {
    return view('admin/dashboard');
});

// Route::get('dashboardberita', function () {
//     return view('admin/login');
// });

// Remove duplicate dashboard route
Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Separate login routes from protected routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
});

// Protected admin routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/dashboardberita', [BeritaController::class, 'index'])->name('admin.dashboardberita');
});

// Berita Routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboardberita', [BeritaController::class, 'index'])->name('admin.dashboardberita');
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
        Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
        Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('admin.berita.show');
        Route::get('/admin/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
        Route::put('/admin/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
        Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
    });
    Route::get('/admin/dashboarddokter', [DokterController::class, 'index'])->name('admin.dashboarddokter');
    Route::get('/admin/dokter/create', [DokterController::class, 'create'])->name('admin.dokter.create');
    Route::post('/admin/dokter', [DokterController::class, 'store'])->name('admin.dokter.store');
    Route::get('/admin/dokter/{dokter}', [DokterController::class, 'show'])->name('admin.dokter.show');
    Route::get('/admin/dokter/{dokter}/edit', [DokterController::class, 'edit'])->name('admin.dokter.edit');
    Route::put('/admin/dokter/{dokter}', [DokterController::class, 'update'])->name('admin.dokter.update');
    Route::delete('/admin/dokter/{dokter}', [DokterController::class, 'destroy'])->name('admin.dokter.destroy');
});
