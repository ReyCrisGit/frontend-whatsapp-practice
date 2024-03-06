<?php

use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ChatController;
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