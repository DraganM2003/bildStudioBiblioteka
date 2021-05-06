<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PismoController;
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
    return view('dashboard.index');
})->name("dashboard");

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/settings', function () {
    return view('settings.index');
})->name("settings");

//rute za pismo
Route::get('/pismo', function () {
    return view('pismo.index');
})->name("pismo.index");

Route::get('/pismo-create', [PismoKontroler::class,'create'])->name("pismo.create");

Route::post('/pismo-save', [PismoKontroler::class,'save'])->name("pismo.save");

Route::get('/pismo-delete/{id}', [PismoKontroler::class,'delete'])->name("pismo.delete");

Route::get('/pismo-edit/{id}', [PismoKontroler::class,'edit'])->name("pismo.edit");

Route::post('/pismo-update', [PismoKontroler::class,'update'])->name("pismo.update");


