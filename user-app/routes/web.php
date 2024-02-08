<?php

use Illuminate\Support\Facades\Auth;
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
});

Auth::routes();

Route::get('/forms', [App\Http\Controllers\FormsController::class, 'index'])->name('forms');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/forms/live-routine', [App\Http\Controllers\FormsController::class, 'liveDonorRoutine'])->name('live-routine');

Route::get('/forms/live-donor-demo', [App\Http\Controllers\FormsController::class, 'liveDonorDemo'])->name('live-donor-demo');

Route::get('/forms/live-recp-demo', [App\Http\Controllers\FormsController::class, 'liveRecpDemo'])->name('live-recp-demo');

Route::post('/submit/live-donor-demo-receive', [App\Http\Controllers\FormsController::class, 'liveDonorDemoReceive'])->name('live-donor-demo-receive');

Route::post('/submit/live-recp-demo-receive', [App\Http\Controllers\FormsController::class, 'liveRecpDemoReceive'])->name('live-recp-demo-receive');

Route::post('/submit/live-routine-receive', [App\Http\Controllers\FormsController::class, 'liveReceive'])->name('live-routine-receive');
