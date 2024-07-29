<?php
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {
    require_once __DIR__.'/api_v1.php';
});

Route::prefix('api/v2')->group(function () {
    require_once __DIR__.'/api_v2.php';
});
