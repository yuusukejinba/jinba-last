<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Weight_management;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function () {
         Route::get('register/step2', [AuthController::class, 'register']);
        });
Route::post('register/step2', [AuthController::class, 'register']);
Route::post('register/step2', [AuthController::class, 'create']);

Route::post('/weight_logs', [AuthController::class, 'store']);
Route::get('/weight_logs/goal_setting', [AuthController::class, 'index']);
Route::post('/weight_logs/goal_setting', [AuthController::class, 'index']);



