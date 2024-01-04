<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/data-siswa', [SiswaController::class, 'showDataSiswa']);
Route::get('/create-data-siswa', [SiswaController::class, 'createDataSiswa']);
Route::post('/create-data-siswa', [SiswaController::class, 'simpanDataSiswa']);

Route::get('/edit-data-siswa/{id}', [SiswaController::class, 'editDataSiswa']);
Route::post('/update-data-siswa/{id}', [SiswaController::class, 'updateDataSiswa']);

Route::get('/delete-data-siswa/{id}', [SiswaController::class, 'deleteDataSiswa']);