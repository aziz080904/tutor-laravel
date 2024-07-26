<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome'); //ke file welcome.blade.php
});

//menampilkan web dirinya sendiri - cara 1
Route::get('/salam', function () {
    return "Selamat Datang Mahasiswa STTNF 2024"; //langsung di cetak
});

//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/profil', function () {
    return view('profil'); //ke file profil.blade.php
});

Route::get('/pasien', function () {
    return view('pasien'); //ke file pasien.blade.php
});

//routing dengan memanfaatkan controller - cara 3
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

//routing pasien
use App\Http\Controllers\PasienController;
Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show'); //tampilkan
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create'); //add
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit'); //edit
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy'); //delete
Route::get('/pasien/{id}', [PasienController::class, 'view'])->name('pasien.view'); //view

//routing paramedik
use App\Http\Controllers\ParamedikController;
Route::get('/paramedik/show', [ParamedikController::class, 'show'])->name('paramedik.show'); //tampilkan
Route::get('/paramedik/create', [ParamedikController::class, 'create'])->name('paramedik.create'); //add
Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store');
Route::get('/paramedik/{id}/edit', [ParamedikController::class, 'edit'])->name('paramedik.edit'); //edit
Route::delete('/paramedik/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy'); //delete
Route::get('/paramedik/{id}', [ParamedikController::class, 'view'])->name('paramedik.view'); //view

//routing kelurahan
use App\Http\Controllers\KelurahanController;
Route::get('/kelurahan/show', [KelurahanController::class, 'show']);

//routing unit_kerja
use App\Http\Controllers\Unit_kerjaController;
Route::get('/unit_kerja/show', [Unit_kerjaController::class, 'show']);




