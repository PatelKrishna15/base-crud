<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\PaginationController;
use Illuminate\Support\Facades\Mail;
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

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('krishahirapara666@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});