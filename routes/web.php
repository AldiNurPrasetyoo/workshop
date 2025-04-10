<?php

use App\Http\Controllers\detail_serviceController;
use App\Http\Controllers\jenis_kendaraanController;
use App\Http\Controllers\jenis_serviceController;
use App\Http\Controllers\kendaraanController;
use App\Http\Controllers\mekanikController;
use App\Http\Controllers\pemilikController;
use App\Http\Controllers\serviceController;
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


Route::get('/jenis-service',[jenis_serviceController::class,'index'])->name('jenis-service.index');
Route::get('/jenis-service/add',[jenis_serviceController::class,'create'])->name('jenis-service.create');
Route::post('/jenis-service/add',[jenis_serviceController::class,'store'])->name('jenis-service.store');
Route::get('/jenis-service/edit/{id}',[jenis_serviceController::class,'edit'])->name('jenis-service.edit');
Route::post('/jenis-service/edit/{id}',[jenis_serviceController::class,'update'])->name('jenis-service.update');
Route::get('/jenis-service/delete/{id}',[jenis_serviceController::class,'destroy'])->name('jenis-service.delete');

Route::get('/service',[serviceController::class,'index'])->name('service.index');
Route::get('/service/add',[serviceController::class,'create'])->name('service.create');
Route::post('/service/add',[serviceController::class,'store'])->name('service.store');
Route::get('/service/edit/{id}',[serviceController::class,'edit'])->name('service.edit');
Route::post('/service/edit/{id}',[serviceController::class,'update'])->name('service.update');
Route::get('/service/delete/{id}',[serviceController::class,'destroy'])->name('service.delete');

Route::get('/mekanik',[mekanikController::class,'index'])->name('mekanik.index');
Route::get('/mekanik/add',[mekanikController::class,'create'])->name('mekanik.create');
Route::post('/mekanik/add',[mekanikController::class,'store'])->name('mekanik.store');
Route::get('/mekanik/edit/{id}',[mekanikController::class,'edit'])->name('mekanik.edit');
Route::post('/mekanik/edit/{id}',[mekanikController::class,'update'])->name('mekanik.update');
Route::get('/mekanik/delete/{id}',[mekanikController::class,'destroy'])->name('mekanik.delete');

Route::get('/pemilik',[pemilikController::class,'index'])->name('pemilik.index');
Route::get('/pemilik/add',[pemilikController::class,'create'])->name('pemilik.create');
Route::post('/pemilik/add',[pemilikController::class,'store'])->name('pemilik.store');
Route::get('/pemilik/edit/{id}',[pemilikController::class,'edit'])->name('pemilik.edit');
Route::post('/pemilik/edit/{id}',[pemilikController::class,'update'])->name('pemilik.update');
Route::get('/pemilik/delete/{id}',[pemilikController::class,'destroy'])->name('pemilik.delete');

Route::get('/kendaraan',[kendaraanController::class,'index'])->name('kendaraan.index');
Route::get('/kendaraan/add',[kendaraanController::class,'create'])->name('kendaraan.create');
Route::post('/kendaraan/add',[kendaraanController::class,'store'])->name('kendaraan.store');
Route::get('/kendaraan/edit/{id}',[kendaraanController::class,'edit'])->name('kendaraan.edit');
Route::post('/kendaraan/edit/{id}',[kendaraanController::class,'update'])->name('kendaraan.update');
Route::get('/kendaraan/delete/{id}',[kendaraanController::class,'destroy'])->name('kendaraan.delete');
