<?php

use App\Http\Controllers\API\V1\TicketController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
   Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
   Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::apiResource('tickets', TicketController::class);
});

