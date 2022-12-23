<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\App;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [App\Http\Controllers\BookController::class, 'home'])->name('home');

Route::get('/', [BookController::class, 'home'])->name('home');
Route::get('/create', [BookController::class, 'createViewPage']);
Route::post('/create-book', [BookController::class, 'createBook']);