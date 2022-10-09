<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GadikController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;


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

// Route::get('/', function () {
//     return view('index');
// });

route::get('/', [SiswaController::class, 'SelectSiswa'])->name('SelectSiswa');

route::get('/SelectSiswa', [SiswaController::class, 'SelectSiswa'])->name('SelectSiswa');
route::get('/Siswa', [SiswaController::class, 'index'])->name('Siswa');
route::get('/Pelajaran', [MapelController::class, 'LihatMapel'])->name('Pelajaran');
route::get('/Gadik', [GadikController::class, 'LihatGadik'])->name('Gadik');