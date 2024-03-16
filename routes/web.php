<?php

use App\Http\Livewire\AnunciosController;
use App\Http\Livewire\PrincipalController;
use App\Http\Livewire\ServiciosController;
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

Route::get('enviar', PrincipalController::class)->name('enviar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('servicios', ServiciosController::class);
Route::get('anun', AnunciosController::class);
