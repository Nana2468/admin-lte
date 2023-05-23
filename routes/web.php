<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;

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
Route::get('/admin/petugas', function () {
    $data = [
        "level" => "Admin"
    ];
    return view('admin/petugas')->with($data);
});
Route::get('/admin/siswa', function () {
    $data = [
        "level" => "Admin"
    ];
    return view('admin/siswa')->with($data);
});
Route::resource('petugas', PetugasController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('admin', AdminController::class);
