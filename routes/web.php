<?php

use App\Http\Controllers\detail_serviceController;
use App\Http\Controllers\jenis_kendaraanController;
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

Route::get('/', function () {
    return view('template');
})->name('home');

Route::get('/detail-service',[detail_serviceController::class,'index'])->name('detail-service.index');
Route::get('/detail-service/add',[detail_serviceController::class,'create'])->name('detail-service.create');
Route::post('/detail-service/add',[detail_serviceController::class,'store'])->name('detail-service.store');
Route::get('/detail-service/edit/{id}',[detail_serviceController::class,'edit'])->name('detail-service.edit');
Route::post('/detail-service/edit/{id}',[detail_serviceController::class,'update'])->name('detail-service.update');
Route::get('/detail-service/delete/{id}',[detail_serviceController::class,'destroy'])->name('detail-service.delete');

Route::get('/jenis-kendaraan',[jenis_kendaraanController::class,'index'])->name('jenis-kendaraan.index');
Route::get('/jenis-kendaraan/add',[jenis_kendaraanController::class,'create'])->name('jenis-kendaraan.create');
Route::post('/jenis-kendaraan/add',[jenis_kendaraanController::class,'store'])->name('jenis-kendaraan.store');
Route::get('/jenis-kendaraan/edit/{id}',[jenis_kendaraanController::class,'edit'])->name('jenis-kendaraan.edit');
Route::post('/jenis-kendaraan/edit/{id}',[jenis_kendaraanController::class,'update'])->name('jenis-kendaraan.update');
Route::get('/jenis-kendaraan/delete/{id}',[jenis_kendaraanController::class,'destroy'])->name('jenis-kendaraan.delete');
