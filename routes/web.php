<?php

use App\Http\Livewire\AnunciosController;
use App\Http\Livewire\AsignarController;
use App\Http\Livewire\ModalanController;
use App\Http\Livewire\PermisosController;
use App\Http\Livewire\Portada;
use App\Http\Livewire\PortadaController;
use App\Http\Livewire\PortadavistaController;
use App\Http\Livewire\PrincipalController;
use App\Http\Livewire\RolesController;
use App\Http\Livewire\ServiciosController;
use App\Http\Livewire\UsersController;
use App\Http\Livewire\Whatsap;
use App\Http\Livewire\WhatsapController;
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

Route::get('/servicioslog', function () {
    return view('layouts.theme.serviciospag');
});
Route::get('/iniciolog', function () {
    return view('layouts.theme.app3');
});
Route::get('/misionVision', function () {
    return view('layouts.theme.misionvision');
});


Route::get('enviar', PrincipalController::class)->name('enviar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users', UsersController::class);
Route::get('roles', RolesController::class);
Route::get('permisos', PermisosController::class);
Route::get('asignar', AsignarController::class);
Route::get('servicios', ServiciosController::class);
Route::get('port', PortadaController::class)->name('port');
Route::get('anuncios', AnunciosController::class);
Route::get('mod', ModalanController::class);
Route::get('portada', PortadavistaController::class);

// Route::get('nosotros', WhatsapController::class)->function('store');
// Route::post('nosotros', [WhatsapController::class, 'store']);

