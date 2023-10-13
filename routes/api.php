<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    resumeController,
    RequirementController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//resume
Route::post('/store-resume', [resumeController::class, 'store']);
Route::get('/get-resume', [resumeController::class, 'index']);

//requirement
Route::post('/store-req', [RequirementController::class, 'store']);
Route::get('/get-req', [RequirementController::class, 'index']);