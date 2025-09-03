<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Operator\DataBarangController;
use App\Http\Controllers\Operator\DataSupplierController;
use App\Http\Controllers\Operator\DataMasukController;
use App\Http\Controllers\Operator\DataKeluarController;
use App\Http\Controllers\Pimpinan\LaporanBarangController;
use App\Http\Controllers\Pimpinan\LaporansupplierController;
use App\Http\Controllers\Admin\DataPimpinanController;
use App\Http\Controllers\Admin\DataOperatorController;
use App\Http\Controllers\Admin\ProfileAdminController;
use App\Http\Controllers\Admin\ProfileOperatorController;
use App\Http\Controllers\Admin\ProfilePimpinanController;


// Route::get('/', function () {
//     return view('/layouts/app');
// });

Route::redirect('/', '/login', 301);

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', [HomeController::class, 'admin'])->name('dashboard.admin');
    Route::post('/dashboard/admin', [HomeController::class, 'admin'])->name('dashboard.admin');
    Route::get('/dashboard/operator', [HomeController::class, 'operator'])->name('dashboard.operator');
    Route::post('/dashboard/operator', [HomeController::class, 'operator'])->name('dashboard.operator');
    Route::get('/dashboard/pimpinan', [HomeController::class, 'pimpinan'])->name('dashboard.pimpinan');

    //operator
    Route::resource('/databarang', DataBarangController::class);
    Route::resource('/datasupplier', DataSupplierController::class);
    Route::resource('/barangmasuk', DataMasukController::class);
    Route::resource('/barangkeluar', DataKeluarController::class);

    //pimpinan
    Route::resource('/laporanbarang', LaporanBarangController::class);
    Route::resource('/laporansupplier', LaporansupplierController::class);
    Route::get('/laporanbarang-cari', [LaporanBarangController::class, 'cari']);
    Route::get('/laporansupplier-cari', [LaporansupplierController::class, 'cari']);
    Route::get('/pdfsupplier', [LaporanBarangController::class, 'pdfsupplier']);
    Route::get('/pdfbarang', [LaporanBarangController::class, 'pdfbarang']);

    //admin
    Route::resource('/usermanagement', DataManagementController::class);
    Route::resource('/datapimpinan', DataPimpinanController::class);
    Route::resource('/dataoprator', DataOperatorController::class);

    //profile
    Route::get('/profile', [ProfileAdminController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{id}', [ProfileAdminController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileOperatorController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{id}', [ProfileOperatorController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfilePimpinanController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{id}', [ProfilePimpinanController::class, 'update'])->name('profile.update');
});
