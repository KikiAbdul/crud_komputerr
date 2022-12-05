<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomputerController;

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

Route::get('/',[KomputerController::class, 'index']);
Route::get('/home',[KomputerController::class, 'home'])->name('home');
Route::get('/komputer',[KomputerController::class, 'komputer'])->name('komputer');
Route::get('/create',[KomputerController::class, 'create'])->name('create');
Route::post('/store',[KomputerController::class, 'store'])->name('store');

Route::get('/edit/{id}',[KomputerController::class, 'edit'])->name('edit');
Route::patch('/update/{id}',[KomputerController::class, 'update'])->name('update');
Route::delete('/delete/{id}',[KomputerController::class, 'destroy'])->name('delete');

