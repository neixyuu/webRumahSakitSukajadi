<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;  // Add this line
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PengaduanController;

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';


// Home
Route::get('/', function () {
    return view('welcome');
});
// Dokter
Route::get('dokter', function () {
    return view('dokter/dokter');
});


Route::get('dokter', [DokterController::class, 'listDokter']);

// Layanan
Route::get('layanan', function () {
    return view('layanan/layanan');
});

// Kontak
Route::get('kontak', function () {
    return view('kontak/kontak');
});

// Berita
Route::get('/berita', [BeritaController::class, 'listBerita'])->name('berita.index');
Route::get('/berita/{berita}', [BeritaController::class, 'showPublic'])->name('berita.show');

// dashboard admin
Route::get('dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// LOGIN ADMIN
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
});

// Protected admin routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboardkritiksaran', [AdminController::class, 'dashboardKritikSaran'])->name('admin.dashboardkritiksaran');
    Route::delete('/kritiksaran/{feedback}', [AdminController::class, 'destroyKritikSaran'])->name('admin.kritiksaran.destroy');
    Route::get('/admin/dashboardberita', [BeritaController::class, 'index'])->name('admin.dashboardberita');
    Route::get('/admin/dashboardfeedback', [FeedbackController::class, 'dashboard'])->name('admin.dashboardfeedback');
    Route::get('/dashboardpengaduan', [FeedbackController::class, 'dashboardPengaduan'])->name('admin.dashboardpengaduan');
    Route::delete('/pengaduan/{pengaduan}', [FeedbackController::class, 'destroyPengaduan'])->name('admin.pengaduan.destroy');
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
    // Route untuk dokter
    Route::get('/admin/dashboarddokter', [DokterController::class, 'index'])->name('admin.dashboarddokter');
    Route::get('/admin/dokter/create', [DokterController::class, 'create'])->name('admin.dokter.create');
    Route::post('/admin/dokter', [DokterController::class, 'store'])->name('admin.dokter.store');
    Route::get('/admin/dokter/{dokter}', [DokterController::class, 'show'])->name('admin.dokter.show');
    Route::get('/admin/dokter/{dokter}/edit', [DokterController::class, 'edit'])->name('admin.dokter.edit');
    Route::put('/admin/dokter/{dokter}', [DokterController::class, 'update'])->name('admin.dokter.update');
    Route::delete('/admin/dokter/{dokter}', [DokterController::class, 'destroy'])->name('admin.dokter.destroy');
    
    //Route untuk tamu
    Route::get('/kritiksaran', [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('/kritiksaran', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/admin/feedback', [FeedbackController::class, 'adminIndex'])->name('admin.feedback.index')->middleware('auth');
    
    // Admin routes (protected)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin/feedback', [App\Http\Controllers\Admin\FeedbackController::class, 'index'])->name('admin.dashboardfeedback');
        Route::delete('/admin/feedback/{feedback}', [App\Http\Controllers\Admin\FeedbackController::class, 'destroy']);
        Route::get('/admin/showkritiksaran', [AdminController::class, 'showKritikSaran'])->name('admin.showkritiksaran');
    });
    Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('admin.feedback.destroy');
});

// Kritik Saran Routes
Route::get('/kritiksaran', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/kritiksaran', [FeedbackController::class, 'store'])->name('feedback.store');

// Pengaduan Routes
Route::get('/pengaduan', function () {
    return view('feedback.pengaduan');
})->name('pengaduan');

Route::post('/pengaduan', [FeedbackController::class, 'storePengaduan'])->name('pengaduan.store');

// Protected admin routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Admin Pengaduan Routes
        Route::get('/pengaduan', [FeedbackController::class, 'indexPengaduan'])->name('admin.pengaduan.index');
        Route::put('/pengaduan/{id}/status', [\App\Http\Controllers\Admin\PengaduanController::class, 'updateStatus'])->name('admin.pengaduan.updateStatus');
        Route::delete('/pengaduan/{id}', [FeedbackController::class, 'destroyPengaduan'])->name('admin.pengaduan.destroy');
    });
});

    // Pengaduan Routes
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

    // Admin Pengaduan Routes (dalam group admin yang sudah ada)
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboardpengaduan', [PengaduanController::class, 'dashboardPengaduan'])->name('admin.dashboardpengaduan');
    Route::get('/admin/pengaduan/{pengaduan}', [\App\Http\Controllers\Admin\PengaduanController::class, 'show'])->name('admin.pengaduan.show');
    Route::get('/admin/kritiksaran/{feedback}', [App\Http\Controllers\Admin\FeedbackController::class, 'show'])->name('admin.kritiksaran.show');
 });


