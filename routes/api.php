<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    require_once __DIR__.'/api_v1.php';
});

Route::prefix('v2')->group(function () {
    require_once __DIR__.'/api_v2.php';
});
