<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/',[FormController::class,'showpage1'])->name('form.page1');
Route::post('/',[FormController::class,'processpage1'])->name('form.processpage1');

Route::get('/page2',[FormController::class,'showpage2'])->name('form.page2');
Route::post('/page2',[FormController::class,'processpage2'])->name('form.processpage2');

Route::get('/page3',[FormController::class,'showpage3'])->name('form.page3');
Route::post('/page3',[FormController::class,'processpage3'])->name('form.processpage3');

Route::get('/page4',[FormController::class,'showpage4'])->name('form.page4');
Route::post('/page4',[FormController::class,'processpage4'])->name('form.processpage4');
