<?php

namespace App\Http\Controllers;


use App\Http\Controllers\{MenuController};
use App\Models\kategori_menu;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PesananController;

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




Route::middleware(['auth'])->group(function () {

    Route::get('/menu', [MenuController::class, 'index']);
    Route::get('/menu/create', [MenuController::class, 'create']);
    Route::post('/menu/simpan-data', [MenuController::class, 'store']);
    Route::get('/menu/view/{id}', [MenuController::class, 'view']);
    Route::get('/menu/edit/{id}', [MenuController::class, 'formEdit']);
    Route::post('/menu/update/{id}', [MenuController::class, 'update']);
    Route::delete('/menu/delete/{id}', [MenuController::class, 'delete'])->name('menu.delete');

    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/pegawai/create', [PegawaiController::class, 'create']);
    Route::post('/pegawai/simpan-data', [PegawaiController::class, 'store']);
    Route::get('/pegawai/view/{id}', [PegawaiController::class, 'view']);
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'formEdit']);
    Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
    Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');

    Route::get('/kategori_menu', [Kategori_menuController::class, 'index']);
    Route::get('/kategori_menu/create', [Kategori_menuController::class, 'create']);
    Route::post('/kategori_menu/simpan-data', [Kategori_menuController::class, 'store']);
    Route::get('/kategori_menu/view/{id}', [kategori_menuController::class, 'view']);
    Route::get('/kategori_menu/edit/{id}', [Kategori_menuController::class, 'formEdit']);
    Route::post('/kategori_menu/update/{id}', [Kategori_menuController::class, 'update']);
    Route::delete('/kategori_menu/delete/{id}', [Kategori_menuController::class, 'delete'])->name('kategori_menu.delete');

    Route::get('/posisi_pekerjaan', [Posisi_PekerjaanController::class, 'index']);
    Route::get('/posisi_pekerjaan/create', [Posisi_pekerjaanController::class, 'create']);
    Route::post('/posisi_pekerjaan/simpan-data', [Posisi_pekerjaanController::class, 'store']);
    Route::get('/posisi_pekerjaan/view/{id}', [posisi_pekerjaanController::class, 'view']);
    Route::get('/posisi_pekerjaan/edit/{id}', [Posisi_PekerjaanController::class, 'formEdit']);
    Route::post('/posisi_pekerjaan/update/{id}', [Posisi_PekerjaanController::class, 'update']);
    Route::delete('/posisi_pekerjaan/delete/{id}', [Posisi_PekerjaanController::class, 'delete'])->name('posisi_pekerjaan.delete');

    Route::get('/inventaris_restoran', [inventaris_restoranController::class, 'index']);
    Route::get('/inventaris_restoran/create', [inventaris_restoranController::class, 'create']);
    Route::post('/inventaris_restoran/simpan-data', [inventaris_restoranController::class, 'store']);
    Route::get('/inventaris_restoran/view/{id}', [inventaris_restoranController::class, 'view']);
    Route::get('/inventaris_restoran/edit/{id}', [inventaris_restoranController::class, 'formEdit']);
    Route::post('/inventaris_restoran/update/{id}', [inventaris_restoranController::class, 'update']);
    Route::delete('/inventaris_restoran/delete/{id}', [inventaris_restoranController::class, 'delete'])->name('inventaris_restoran.delete');

    Route::get('/user', [userController::class, 'index']);
    Route::get('/user/create', [userController::class, 'create']);
    Route::post('/user/simpan-data', [userController::class, 'store']);
    Route::get('/user/view/{id}', [userController::class, 'view']);
    Route::get('/user/edit/{id}', [userController::class, 'formEdit']);
    Route::post('/user/update/{id}', [userController::class, 'update']);
    Route::delete('/user/delete/{id}', [userController::class, 'delete'])->name('user.delete');
    Route::get('/logout', [Auth\LoginController::class, 'logout']);

    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
    Route::post('/pesanan/store', [PesananController::class, 'store'])->name('pesanan.store');
    Route::get('/pesanan/view/{id}', [pesananController::class, 'view']);
    Route::delete('/pesanan/delete/{id}', [pesananController::class, 'delete'])->name('pesanan.delete');
});

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login'])->name('login.proses');
Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);




Route::get('/', [homeController::class, 'index']);
Route::get('/home', [homeController::class, 'index']);
Route::get('/about', [aboutController::class, 'index']);
Route::get('/service', [serviceController::class, 'index']);
Route::get('/varianmenu', [varianmenuController::class, 'index']);
Route::get('/booking', [bookingController::class, 'index']);
Route::get('/testimonial', [testimonialController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/master_chefs', [master_chefsController::class, 'index']);
Route::get('/online_order', [online_orderController::class, 'index']);
