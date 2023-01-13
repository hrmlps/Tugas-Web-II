<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mulai');
});


Auth::routes(['verify'=>true]);

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dsh'])->name('dashboard');
    Route::get('/pegawai/data', [App\Http\Controllers\PegawaiController::class, 'index'])->name('get.data');
    Route::get('/pegawai/create', [App\Http\Controllers\PegawaiController::class, 'create'])->name('get.create');
    Route::post('/pegawai/prosestambah', [App\Http\Controllers\PegawaiController::class, 'proses_tambah'])->name('post.tambah');
    Route::get('/pegawai/ubah/{id}', [App\Http\Controllers\PegawaiController::class, 'ubah'])->name('get.ubah');
    Route::patch('/pegawai/ubahproses/{id}', [App\Http\Controllers\PegawaiController::class, 'proses_ubah'])->name('put.ubah');
    Route::delete('/pegawai/hapus/{id}', [App\Http\Controllers\PegawaiController::class, 'hapus'])->name('delete.hapus');
    
    
    Route::get('/jabatan/data', [App\Http\Controllers\JabatanController::class, 'index'])->name('data-jabatan');
    Route::get('/jabatan/create', [App\Http\Controllers\JabatanController::class, 'create'])->name('get.createe');
    Route::post('/jabatan/prosestambah', [App\Http\Controllers\JabatanController::class, 'proses_tambah'])->name('post.tambahh');
    Route::get('/jabatan/ubah/{id}', [App\Http\Controllers\JabatanController::class, 'ubah'])->name('get.ubahh');
    Route::patch('/jabatan/ubahproses/{id}', [App\Http\Controllers\JabatanController::class, 'proses_ubah'])->name('put.ubahh');
    Route::delete('/jabatan/hapus/{id}', [App\Http\Controllers\JabatanController::class, 'hapus'])->name('delete.hapuss');
    
    Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info');
});
