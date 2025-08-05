<?php

use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('consulta/{id}', [CarroController::class, 'consultaID'])->name('consultaID');

