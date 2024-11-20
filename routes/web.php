<?php

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
    return view('limit.index', [
        'title' => 'Materi',
    ]);
});

// Route::get('/limit', function () {
//     return view('limit.index', [
//         'title' => 'Kalkulus Limit',
//     ]);
// });

Route::get('/calc', function () {
    return view('calc.index');
});

Route::get('/latihan', function () {
    return view('limit.latihan', [
        'title' => 'Latihan'
    ]);
});