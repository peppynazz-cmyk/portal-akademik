
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Halaman khusus mahasiswa
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/mahasiswa/profil', function () {
        return view('mahasiswa.profil');
    });

    Route::get('/mahasiswa/jadwal', function () {
        return view('mahasiswa.jadwal');
    });
});

// Halaman khusus dosen
Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen/kelas', function () {
        return view('dosen.kelas');
    });

    Route::get('/dosen/nilai', function () {
        return view('dosen.nilai');
    });
});

// Halaman khusus admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pengguna', function () {
        return view('admin.pengguna');
    });
});

// Fitur profile bawaan Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
