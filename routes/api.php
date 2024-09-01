<?php

use App\Http\Controllers\API\MapRouteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/map/{route?}', MapRouteController::class)->middleware('auth:sanctum');