<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\ResponController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\UlangController;
use App\Http\Controllers\InvoiceController;

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
    return view('admin.beranda');
});

// Donatur
Route::get('/donatur',[DonaturController::class, 'index']);
Route::get('/donaturtambah',[DonaturController::class, 'tambah']);
Route::post('/donaturstore', [DonaturController::class, 'store']);

// Respon Donatur
Route::get('/respon',[ResponController::class, 'index']);
Route::get('/respontambah',[ResponController::class, 'tambah']);
Route::post('/responstore', [ResponController::class, 'store']);

// Periode
Route::get('/periode',[PeriodeController::class, 'index']);
Route::get('/periodetambah',[PeriodeController::class, 'tambah']);

// Ulang Donasi
Route::get('/ulang',[UlangController::class, 'index']);
Route::get('/ulangtambah',[UlangController::class, 'tambah']);

// Invoice
Route::get('/invoice',[InvoiceController::class, 'index']);
Route::get('/invoicetambah',[InvoiceController::class, 'tambah']);
