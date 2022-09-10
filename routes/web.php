<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[crudController::class,'index'])->name('home');
Route::get('/add',[crudController::class,'add'])->name('add');
Route::post('/create',[crudController::class,'create'])->name('create');

Route::get('/manage',[crudController::class,'manage'])->name('manage');
Route::get('/delete/{id}',[crudController::class,'delete'])->name('delete');
Route::get('/update/{id}',[crudController::class,'update'])->name('update');
Route::post('/edit/{id}',[crudController::class,'edit'])->name('up');
