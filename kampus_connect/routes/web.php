<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\mhsController;

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
    return redirect('login');
});

Route::get('login', [loginController::class, 'login'])->name('login');
Route::get('logout', [loginController::class, 'logout'])->name('logout');
Route::post('ceklogin', [loginController::class, 'ceklogin'])->name('ceklogin');
Route::get('daftar', [loginController::class, 'daftar'])->name('daftar');
Route::post('cekdaftar', [loginController::class, 'cekdaftar'])->name('cekdaftar');

Route::get('mhs/dasboard', [mhsController::class, 'dasboard'])->name('mhsdasboard');
Route::get('mhs/profil', [mhsController::class, 'profil'])->name('mhsprofil');
Route::get('mhs/bookmark', [mhsController::class, 'bookmark'])->name('mhsbookmark');

Route::post('mhs/upprofil', [mhsController::class, 'upprofil'])->name('mhsupprofil');
Route::post('mhs/uppengalaman', [mhsController::class, 'uppengalaman'])->name('mhsuppengalaman');
Route::post('mhs/uppendidikan', [mhsController::class, 'uppendidikan'])->name('mhsuppendidikan');
Route::post('mhs/upkemampuan', [mhsController::class, 'upkemampuan'])->name('mhsupkemampuan');
Route::get('mhs/delkemampuan/{p}', [mhsController::class, 'delkemampuan'])->name('mhsdelkemampuan');
Route::get('mhs/delpengalaman/{p}', [mhsController::class, 'delpengalaman'])->name('mhsdelpengalaman');
Route::get('mhs/delpendidikan/{p}', [mhsController::class, 'delpendidikan'])->name('mhsdelpendidikan');
