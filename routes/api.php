<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\DetailController;
use App\Http\Controllers\API\PaketMakananController;
use App\Http\Controllers\API\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {
Route::resource('customer', CustomerController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('paket-makanan', PaketMakananController::class);
Route::resource('detail', DetailController::class);
});