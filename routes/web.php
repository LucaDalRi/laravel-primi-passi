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

Route::get('/views/Contattaci.blade.php', function () {
    return view('Contattaci');
});

Route::get('/views/Termini.blade.php', function () {
    return view('Termini');
});

Route::get('/views/Privacy.blade.php', function () {
    return view('Privacy');
});

Route::get('/views/RiguardoANoi.blade.php', function () {
    return view('RiguardoANoi');
});
