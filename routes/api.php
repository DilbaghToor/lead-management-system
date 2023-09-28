<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\viewController;

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

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::apiResource('member', ApiController::class);

Route::post('senddata', [viewController::class, 'store'])->name('std');
Route::post('sendactive', [viewController::class, 'delstatus'])->name('std');
