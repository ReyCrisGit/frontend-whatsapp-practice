<?php

use App\Http\Controllers\CuentaController;
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