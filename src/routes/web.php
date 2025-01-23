<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;
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
         Route::get('/', [WeightController::class, 'index']);
         Route::get('register/step2', [WeightController::class, 'register']);
         Route::get('/weight_logs', [WeightController::class, 'register']);
        });
Route::post('register/step2', [WeightController::class, 'register']);
Route::post('register/step2', [WeightController::class, 'create']);

Route::post('/weight_logs', [WeightController::class, 'store']);
Route::get('/weight_logs/goal_setting', [WeightController::class, 'index']);
Route::post('/weight_logs/goal_setting', [WeightController::class, 'index']);
Route::get('/weight_update', [WeightController::class, 'edit']);
Route::post('/weight_logs/{:weightLogId}/update', [WeightController::class, 'update']);



