<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\TimesheetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('timesheet', [TimesheetController::class, 'index']);
Route::post('timesheet/store', [TimesheetController::class, 'store']);
Route::get('timesheet/show/{id}', [TimesheetController::class, 'show']);
Route::post('timesheet/update/{id}', [TimesheetController::class, 'update']);
Route::get('timesheet/destroy/{id}', [TimesheetController::class, 'destroy']);
Route::get('timesheet/{id}/name', [TimesheetController::class, 'getProjectName']);

// Route::post('user', [LoginController::class, 'login']);
// Route::post('user/store', [LoginController::class, 'store']);
