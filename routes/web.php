<?php

use App\Http\Controllers\SearchingController;
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

Route::get('/', [SearchingController::class,'index']);
Route::get('/get/data', [SearchingController::class,'get_data']);
Route::get('/get/search/data', [SearchingController::class,'search_data']);
Route::get('/get/value/data', [SearchingController::class,'record_by_value']);
