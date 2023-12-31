<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create', [UsuarioController::class, 'create']);
Route::get('/usuario/{id}', [UsuarioController::class, 'get']);
