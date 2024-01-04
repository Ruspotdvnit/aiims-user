<?php

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

Route::get('/', function () {
    return view('welcome');
}); //->middleware('auth');

Auth::routes();

Route::get('/forms', [App\Http\Controllers\FormsController::class, 'index'])->name('forms');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/forms/live-donor', [App\Http\Controllers\FormsController::class, 'liveDonor'])->name('live-donor');
