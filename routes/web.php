<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


Route::get('/', [PageController::class, 'index']);
Route::get('/alat', [PageController::class, 'show_alat']);
Route::get('/bahan', [PageController::class, 'show_bahan']);
Route::get('/menu', [PageController::class, 'show_menu']);
Route::get('/penjualan', [PageController::class, 'show_penjualan']);
Route::get('/barista', [PageController::class, 'show_barista']);
