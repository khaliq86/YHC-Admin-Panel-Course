<?php

use App\Http\Controllers\DashboardController;
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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kursus', [DashboardController::class, 'kursus'])->name('kursus');
Route::get('/form-kursus', [DashboardController::class, 'formKursus'])->name('form-kursus');
Route::post('/tambah-kursus', [DashboardController::class, 'tambahKursus'])->name('tambah-kursus');
Route::get('/edit-kursus/{id}', [DashboardController::class, 'editKursus'])->name('edit-kursus');
Route::post('/update-kursus/{id}', [DashboardController::class, 'updateKursus'])->name('update-kursus');
Route::get('/hapus-kursus/{id}', [DashboardController::class, 'hapusKursus'])->name('hapus-kursus');
Route::get('/kursus/detail/{id}', [DashboardController::class, 'detailKursus'])->name('daftar-detail-kursus');

Route::get('/daftar-materi', [DashboardController::class, 'daftarMateri'])->name('daftar-materi');
Route::get('/form-materi', [DashboardController::class, 'formMateri'])->name('form-materi');
Route::post('/tambah-materi', [DashboardController::class, 'tambahMateri'])->name('tambah-materi');
Route::get('/edit-materi/{id}', [DashboardController::class, 'editMateri'])->name('edit-materi');
Route::post('/update-materi/{id}', [DashboardController::class, 'updateMateri'])->name('update-materi');
Route::get('/hapus-materi/{id}', [DashboardController::class, 'hapusMateri'])->name('hapus-materi');