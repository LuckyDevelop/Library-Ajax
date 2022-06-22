<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyingController;
use App\Http\Controllers\SellingController;
use App\Models\Buying;
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
    return view('index');
});

Route::get('/book', [BookController::class, 'index']);

Route::get('/buying', [BuyingController::class, 'index']);

Route::get('/selling', [SellingController::class, 'index']);
