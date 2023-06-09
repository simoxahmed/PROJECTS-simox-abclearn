<?php

use App\Models\Abclearn;
use App\Models\User_abc;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbclearnController;
use App\Http\Controllers\User_abcController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//user:

Route::get('/user',[User_abcController::class,'index'])->name('user');
Route::get('/user/create',[User_abcController::class,'create'])->name('user.create');
Route::post('/user/store',[User_abcController::class,'store'])->name('user.store');
Route::get('/user/{user}/show',[User_abcController::class,'show'])->name('user.show');
Route::get('/user/{user}/edit',[User_abcController::class,'edit'])->name('user.edit');
Route::put('/user/{user}/update',[User_abcController::class,'update'])->name('user.update');
Route::delete('/user/{user}/delete',[User_abcController::class,'destroy'])->name('user.delete');

//abclearn:

Route::get('/abclearn',[AbclearnController::class,'index'])->name('abclearn');
Route::get('/abclearn/create',[AbclearnController::class,'create'])->name('abclearn.create');
Route::post('/abclearn/store',[AbclearnController::class,'store'])->name('abclearn.store');
Route::get('/abclearn/{abclearn}/show',[AbclearnController::class,'show'])->name('abclearn.show');
Route::get('/abclearn/{abclearn}/edit',[AbclearnController::class,'edit'])->name('abclearn.edit');
Route::put('/abclearn/{abclearn}/update',[AbclearnController::class,'update'])->name('abclearn.update');
Route::delete('/abclearn/{abclearn}/delete',[AbclearnController::class,'destroy'])->name('abclearn.delete');
