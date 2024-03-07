<?php

use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LlamadaController;
use App\Http\Controllers\GrupoController;
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

Route::get('/cuentas', [CuentaController::class, 'index'])->name('cuenta.index');
Route::get('/cuentas/create', [CuentaController::class, 'create'])->name('cuenta.create');
Route::post('/cuentas/store', [CuentaController::class, 'store'])->name('cuentas.store');
Route::get('/cuentas/{id}/edit', [CuentaController::class, 'edit'])->name('cuentas.edit');
Route::put('/cuentas/{id}/update', [CuentaController::class, 'update'])->name('cuentas.update');
Route::get('/cuentas/{id}/view', [CuentaController::class, 'show'])->name('cuentas.view');
Route::delete('/cuentas/{id}/delete', [CuentaController::class, 'destroy'])->name('cuentas.destroy');

Route::get('/chats', [ChatController::class, 'index'])->name('chats.index');
Route::get('/chats/create', [ChatController::class, 'create'])->name('chat.create');
Route::post('/chats/store', [ChatController::class, 'store'])->name('chats.store');
Route::get('/chats/{id}/edit', [ChatController::class, 'edit'])->name('chats.edit');
Route::put('/chats/{id}/update', [ChatController::class, 'update'])->name('chats.update');
Route::get('/chats/{id}/view', [ChatController::class, 'show'])->name('chats.view');
Route::delete('/chats/{id}/delete', [ChatController::class, 'destroy'])->name('chats.destroy');
Route::get('/chats/search', [ChatController::class, 'search'])->name('chats.search');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contacto.index');
Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos/store', [ContactoController::class, 'store'])->name('contactos.store');
Route::get('/contactos/{id}/edit', [ContactoController::class, 'edit'])->name('contactos.edit');
Route::put('/contactos/{id}/update', [ContactoController::class, 'update'])->name('contactos.update');
Route::get('/contactos/{id}/view', [ContactoController::class, 'show'])->name('contactos.view');
Route::delete('/contactos/{id}/delete', [ContactoController::class, 'destroy'])->name('contactos.destroy');
Route::get('/contactos/search', [ContactoController::class, 'search'])->name('contactos.search');

Route::get('/llamadas', [LlamadaController::class, 'index'])->name('llamada.index');
Route::get('/llamadas/create', [LlamadaController::class, 'create'])->name('llamada.create');
Route::post('/llamadas/store', [LlamadaController::class, 'store'])->name('llamadas.store');
Route::get('/llamadas/{id}/edit', [LlamadaController::class, 'edit'])->name('llamadas.edit');
Route::put('/llamadas/{id}/update', [LlamadaController::class, 'update'])->name('llamadas.update');
Route::get('/llamadas/{id}/view', [LlamadaController::class, 'show'])->name('llamadas.view');
Route::delete('/llamadas/{id}/delete', [LlamadaController::class, 'destroy'])->name('llamadas.destroy');

Route::get('/grupos', [GrupoController::class, 'index'])->name('grupo.index');
Route::get('/grupos/create', [GrupoController::class, 'create'])->name('grupo.create');
Route::post('/grupos/store', [GrupoController::class, 'store'])->name('grupos.store');
Route::get('/grupos/{id}/edit', [GrupoController::class, 'edit'])->name('grupos.edit');
Route::put('/grupos/{id}/update', [GrupoController::class, 'update'])->name('grupos.update');
Route::get('/grupos/{id}/view', [GrupoController::class, 'show'])->name('grupos.view');
Route::delete('/grupos/{id}/delete', [GrupoController::class, 'destroy'])->name('grupos.destroy');

Route::get('/comunidades', [ComunidadController::class, 'index'])->name('comunidade.index');
Route::get('/comunidades/create', [ComunidadController::class, 'create'])->name('comunidade.create');
Route::post('/comunidades/store', [ComunidadController::class, 'store'])->name('comunidades.store');
Route::get('/comunidades/{id}/edit', [ComunidadController::class, 'edit'])->name('comunidades.edit');
Route::put('/comunidades/{id}/update', [ComunidadController::class, 'update'])->name('comunidades.update');
Route::get('/comunidades/{id}/view', [ComunidadController::class, 'show'])->name('comunidades.view');
Route::delete('/comunidades/{id}/delete', [ComunidadController::class, 'destroy'])->name('comunidades.destroy');