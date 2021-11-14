<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
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

Route::get('/', [TodoController::class, 'home'])->name('home');

Route::post('/create', [TodoController::class, 'create'])->name('create');

Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [TodoController::class, 'update'])->name('update');

Route::post('/delete/{id}', [TodoController::class, 'delete'])->name('delete');
