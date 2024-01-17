<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});

Route::get('/beranda', [AuthController::class, 'index'])->name('beranda');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/artikel', [AuthController::class, 'artikel'])->name('artikel');
Route::get('/riwayat', [AuthController::class, 'riwayat'])->name('riwayat');
Route::get('/janjiTemu', [AuthController::class, 'janjiTemuPost'])->name('janjiTemu');
Route::post('/pasienSave', [AuthController::class, 'save'])->name('pasienSave');
Route::get('/dataObat', [AuthController::class, 'dataObat'])->name('dataObat');
Route::get('/beliObat', [AuthController::class, 'beliObatPost'])->name('beliObat');
Route::post('/obatSave', [AuthController::class, 'obatSave'])->name('obatSave');


