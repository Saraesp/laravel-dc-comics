<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagecController as PagecController;
use App\Http\Controllers\ComicsController as ComicsController;

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

Route::get('/', [PagecController::class, 'index'])->name('homepage');

Route::resource('comics', ComicsController::class);


