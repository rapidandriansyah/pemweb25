<?php

use App\Http\Controllers\Api\LaporanApiController; // <- Cek penamaan ini juga
use App\Http\Controllers;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::prefix('laporans')->middleware('apikey')->group(function () {
    Route::get('/', [LaporanController::class, 'index']);
    Route::post('/decrypt', [LaporanController::class, 'decryptResponse']);
    Route::get('{id}', [LaporanController::class, 'show']);
    Route::post('/', [LaporanController::class, 'store']);
    Route::put('{id}', [LaporanController::class, 'update']);
    Route::delete('{id}', [LaporanController::class, 'destroy']);
});
