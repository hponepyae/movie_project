<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllMovieController;

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

Route::get('/',[AllMovieController::class,'start'])->name('start');
Route::get('admin',[AllMovieController::class,'admin'])->name('admin');
Route::post('insert',[AllMovieController::class,'insert'])->name('insert');
Route::get('review/{id}',[AllMovieController::class,'review'])->name('review');
