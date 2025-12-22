<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/workshop', [WorkshopController::class, 'index']);
Route::post('/workshop', [WorkshopController::class, 'store']);
