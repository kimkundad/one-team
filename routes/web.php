<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSheetsController;

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

Route::get('/', [GoogleSheetsController::class, 'search']);

Route::get('/sheet/read', [GoogleSheetsController::class, 'readSheet']);
Route::post('/sheet/write', [GoogleSheetsController::class, 'writeSheet']);
Route::get('/search', [GoogleSheetsController::class, 'search']);
Route::post('/checkin', [GoogleSheetsController::class, 'checkin'])->name('checkin');
