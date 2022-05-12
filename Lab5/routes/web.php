<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'landing'])->name('landing');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/menu', [MainController::class, 'menu'])->name('menu');

Route::get('/basket', [MainController::class, 'basket'])->name('basket');

Route::get('/ordering', [MainController::class, 'ordering'])->name('ordering');

Route::get('/item/{id}', [MainController::class, 'item'])->name('item');

Route::post('/ordering', [MainController::class, 'orderingPost']);

Route::get('/message', [MainController::class, 'message'])->name('message');
