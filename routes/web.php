<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\SalaryController;
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

Route::get('/', [HomeController::class, 'pegawai'])->name('pegawai');
Route::post('/add_pegawai', [HomeController::class, 'add_pegawai'])->name('add_pegawai');
Route::put('/update_pegawai', [HomeController::class, 'update_pegawai'])->name('update_pegawai');
Route::get('/delete_pegawai/{id}', [HomeController::class, 'delete_pegawai'])->name('delete_pegawai');
