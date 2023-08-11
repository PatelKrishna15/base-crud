<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\MailController;
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

Route::get('/',[PaginationController::class,'index'])->name('index');
Route::get('/create',[PaginationController::class,'create'])->name('create');
Route::post('/store',[PaginationController::class,'store'])->name('store');
Route::get('/delete/{id}',[PaginationController::class,'destroy'])->name('delete');
Route::get('/edit/{id}',[PaginationController::class,'edit'])->name('edit');
Route::post('/update',[PaginationController::class,'update'])->name('update');


Route::get('send-mail', [MailController::class, 'index']);