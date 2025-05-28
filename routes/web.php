<?php

use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;
use App\Models\Machine;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/maquinas', [MachineController::class, 'traerMaquinas'])->name('maquinas');
Route::get('/borrarmaquina', [MachineController::class, 'traerMaquinas'])->name('borrarmaquinas');
Route::get('/maquinas/{id}/edit', [MachineController::class, 'edit'])->name('maquinas.edit');
Route::delete('/maquinas/{id}', [MachineController::class, 'delete'])->name('maquinas.destroy');
Route::patch('/maquinas/{id}', [MachineController::class, 'update'])->name('maquinas.update');
Route::get('/maquinas/create', [MachineController::class, 'prepare'])->name('maquinas.prepare');
Route::put('/maquinas/create',[MachineController::class, 'create'])->name('maquinas.create');

require __DIR__.'/auth.php';