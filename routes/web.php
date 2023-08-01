<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\JanjiTemuController;
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

    return view('welcome');
});

Route::get('/list_dokter',[DokterController::class, 'index']);
Route::get('/janji_temu',[JanjiTemuController::class, 'index']);
Route::post('/list_dokter/create', [DokterController::class, 'create']);

