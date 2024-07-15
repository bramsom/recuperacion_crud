<?php
namespace App\Http\Controllers;

use App\Http\Controllers\GameTeamcontroller;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//ejercicio 1
Route::get('presidentes/listar', [PresidentController::class, 'index'])->name('presidente.index');
Route::get('presidentes/create', [PresidentController::class, 'create']);
Route::post('presidentes/store', [PresidentController::class, 'store'])->name('presidente.store');
Route::get('presidente/{president}', [PresidentController::class, 'show'])->name('presidente.show');
Route::put('presidentes/{president}', [PresidentController::class, 'update'])->name('presidente.update');
Route::delete('president/{president}', [PresidentController::class, 'destroy'])->name('presidente.destroy');
Route::get('presidentes/{president}/editar', [PresidentController::class, 'edit'])->name('presidente.edit');

Route::get('jugador/listar', [PlayerController::class, 'index'])->name('jugador.index');
Route::get('jugador/create', [PlayerController::class, 'create']);
Route::post('jugador/store', [PlayerController::class, 'store'])->name('jugador.store');
Route::get('jugador/{player}', [PlayerController::class, 'show'])->name('jugador.show');
Route::put('jugadores/{player}', [PlayerController::class, 'update'])->name('jugador.update');
Route::delete('player/{player}', [PlayerController::class, 'destroy'])->name('jugador.destroy');
Route::get('jugador/{player}/editar', [PlayerController::class, 'edit'])->name('jugador.edit');

Route::get('equipo/asociar',[GameTeamcontroller::class,'asociar']);
Route::post('equipo/store',[GameTeamcontroller::class,'store'])->name('game_team.store');

//ejercicio 2

Route::get('colaborador/listar', [CollaboratorController::class, 'index'])->name('colaborador.index');
Route::get('colaborador/create', [CollaboratorController::class, 'create']);
Route::post('colaborador/store', [CollaboratorController::class, 'store'])->name('colaborador.store');
Route::get('colaborador/{collaborator}', [CollaboratorController::class, 'show'])->name('colaborador.show');
Route::put('colaboradores/{collaborator}', [CollaboratorController::class, 'update'])->name('colaborador.update');
Route::delete('collaborator/{collaborator}', [CollaboratorController::class, 'destroy'])->name('colaborador.destroy');
Route::get('colaborador/{collaborator}/editar', [CollaboratorController::class, 'edit'])->name('colaborador.edit');

Route::get('cliente/listar', [CustomerController::class, 'index'])->name('cliente.index');
Route::get('cliente/create', [CustomerController::class, 'create']);
Route::post('cliente/store', [CustomerController::class, 'store'])->name('cliente.store');
Route::get('cliente/{customer}', [CustomerController::class, 'show'])->name('cliente.show');
Route::put('clientes/{customer}', [CustomerController::class, 'update'])->name('cliente.update');
Route::delete('customer/{customer}', [CustomerController::class, 'destroy'])->name('cliente.destroy');
Route::get('cliente/{customer}/editar', [CustomerController::class, 'edit'])->name('cliente.edit');

Route::get('collaborador/asociar',[CollaboratorProjectController::class,'asociar']);
Route::post('collaborador/store',[CollaboratorProjectController::class,'store'])->name('collaborator_project.store');

//ejercicio 3

Route::get('origen/listar', [OriginController::class, 'index'])->name('origen.index');
Route::get('origen/create', [OriginController::class, 'create']);
Route::post('origen/store', [OriginController::class, 'store'])->name('origen.store');
Route::get('origen/{origin}', [OriginController::class, 'show'])->name('origen.show');
Route::put('origenes/{origin}', [OriginController::class, 'update'])->name('origen.update');
Route::delete('origin/{origin}', [OriginController::class, 'destroy'])->name('origen.destroy');
Route::get('origen/{origin}/editar', [OriginController::class, 'edit'])->name('origen.edit');

Route::get('viajero/listar', [TavelerController::class, 'index'])->name('viajero.index');
Route::get('viajero/create', [TavelerController::class, 'create']);
Route::post('viajero/store', [TavelerController::class, 'store'])->name('viajero.store');
Route::get('viajero/{taveler}', [TavelerController::class, 'show'])->name('viajero.show');
Route::put('viajeros/{taveler}', [TavelerController::class, 'update'])->name('viajero.update');
Route::delete('taveler/{taveler}', [TavelerController::class, 'destroy'])->name('viajero.destroy');
Route::get('viajero/{taveler}/editar', [TavelerController::class, 'edit'])->name('viajero.edit');
