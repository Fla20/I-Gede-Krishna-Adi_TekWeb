<?php

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

Route::get('/dashboard', function () {
    return redirect('/kasir/dashboard');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/kasir/{any}', function () {
        return view('dashboard');
    })->where('any', '.*');
});

// Route::group(['middleware' => ['auth', 'role:pembimbingakademik']], function () {
//     Route::get('pembimbing-akademik/{any}', function () {
//         return view('pembimbingAkademik.app');
//     })->where('any', '.*');
// });

require __DIR__.'/auth.php';
