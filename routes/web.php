<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('homepage', function () {
//     return view('homepage');
// });
use App\Http\Controllers\TehController;
Route::get('/tehs', [TehController::class, 'Homepageuser'])->name('tehs.Homepageuser');
Route::get('/tehsadmin', [TehController::class, 'Homepageadmin'])->name('tehs.Homepageadmin');

// use App\Http\Controllers\ResepController;

// Route::middleware('auth')->group(function () {
//     Route::get('/admin/resep', [ResepController::class, 'control'])->name('admin.resep.control');
//     Route::post('/admin/resep', [ResepController::class, 'store'])->name('resep.store');
//     Route::get('/admin/resep/{id}/edit', [ResepController::class, 'edit'])->name('resep.edit');
//     Route::put('/admin/resep/{id}', [ResepController::class, 'update'])->name('resep.update');
//     Route::delete('/admin/resep/{id}', [ResepController::class, 'destroy'])->name('resep.destroy');
// });

use App\Http\Controllers\ResepController;

Route::get('/admin/resep', [ResepController::class, 'control'])->name('admin.resep.control');

// Route::get('/admin/resep/{id}/edit', function () {
//     // Data statis sebagai contoh
//     $resep = [
//         'id' => 1,
//         'nama' => 'Teh Tarik',
//         'deskripsi' => 'Teh susu khas Malaysia dengan rasa manis yang nikmat.',
//         'bahan' => "1. Teh bubuk\n2. Susu kental manis\n3. Air panas",
//         'langkah' => "1. Seduh teh bubuk dengan air panas.\n2. Tambahkan susu kental manis.\n3. Tarik teh beberapa kali hingga berbusa."
//     ];

//     // Kirim data ke view
//     return view('admin.resep.edit', compact('resep'));
// });
Route::get('/admin/resep/{id}/edit', [ResepController::class, 'edit'])->name('admin.resep.edit');



// Rute untuk form simpan, edit, dan hapus resep
Route::post('/admin/resep', [ResepController::class, 'store'])->name('resep.store');
// Route::get('/admin/resep/{id}/edit', [ResepController::class, 'edit'])->name('resep.edit');
Route::put('/admin/resep/{id}', [ResepController::class, 'update'])->name('resep.update');
Route::delete('/admin/resep/{id}', [ResepController::class, 'destroy'])->name('resep.destroy');


use App\Http\Controllers\ArticleController;

Route::get('/kelolaartikel', [ArticleController::class, 'kelolaartikel'])->name('admin.artikel.kelolaartikel');
Route::get('/createartikel', [ArticleController::class, 'createartikel'])->name('admin.artikel.createartikel');
Route::post('/createartikel', [ArticleController::class, 'store'])->name('admin.artikel.store');
Route::get('/editartikel/{id}', [ArticleController::class, 'editartikel'])->name('admin.artikel.editartikel');
Route::put('/editartikel/{id}', [ArticleController::class, 'update'])->name('admin.artikel.update');
Route::delete('/deleteartikel/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy');

use App\Http\Controllers\tehsController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ResepTehController;
// Menampilkan daftar artikel
Route::get('/artikel', [ArtikelController::class, 'daftarArtikel'])->name('tehs.artikel');

// Menampilkan detail artikel tanpa slug
Route::get('/artikel/detail/', [ArtikelController::class, 'Detailartikel'])->name('tehs.artikel.Detailartikel');
Route::get('/Artikel', [ArtikelController::class, 'Artikel'])->name('tehs.artikel.Artikel');

// Route untuk Kebaikan Teh
Route::get('/Manfaat-teh', [TehController::class, 'manfaat'])->name('tehs.manfaatteh');

//Rute resep teh
Route::get('/Resep-teh', [ResepTehController::class,'ResepTeh'])->name('tehs.Resep');

// routes/web.php

use App\Http\Controllers\RiwayatAksesController;

Route::get('/riwayat-akses', [RiwayatAksesController::class, 'riwayatakses'])->name('tehs.admin.riwayatakses')->middleware('isAdmin');





