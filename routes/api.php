<?php

use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\ShamuyToursController;
use App\Models\ShamuyTours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//ENTERPRISE
Route::get('/example', [EnterpriseController::class, 'index']);
Route::post('/enterprise-add', [EnterpriseController::class, 'store']);


//TOUR
Route::post('/shamuy-tour-add', [ShamuyToursController::class, 'store']);
Route::get('/shamuy-tour-list', [ShamuyToursController::class, 'index']);


