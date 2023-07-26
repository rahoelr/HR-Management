<?php

use App\Http\Controllers\API\DivisionController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TimesheetController;
use App\Http\Controllers\API\AttendanceController;
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

Route::get('user', [LoginController::class, 'index']);
// Route::post('login', [LoginController::class, 'login']);
Route::post('user/store', [LoginController::class, 'store']);
Route::get('user/show/{id}', [LoginController::class, 'show']);
Route::post('user/update/{id}', [LoginController::class, 'update']);
Route::get('user/destroy/{id}', [LoginController::class, 'destroy']);


Route::get('timesheet', [TimesheetController::class, 'index']);
Route::post('timesheet/store', [TimesheetController::class, 'store']);
Route::get('timesheet/show/{id}', [TimesheetController::class, 'show']);
Route::post('timesheet/update/{id}', [TimesheetController::class, 'update']);
Route::get('timesheet/destroy/{id}', [TimesheetController::class, 'destroy']);
Route::get('timesheet/{id}/name', [TimesheetController::class, 'getProjectName']);


Route::get('project', [ProjectController::class, 'index']);
Route::post('project/store', [ProjectController::class, 'store']);
Route::get('project/show/{id}', [ProjectController::class, 'show']);
Route::post('project/update/{id}', [ProjectController::class, 'update']);
Route::get('project/destroy/{id}', [ProjectController::class, 'destroy']);


Route::get('division', [DivisionController::class, 'index']);
Route::post('division/store', [DivisionController::class, 'store']);
Route::post('division/show/{id}', [DivisionController::class, 'show']);
Route::post('division/update/{id}', [DivisionController::class, 'update']);
Route::get('division/destroy/{id}', [DivisionController::class, 'destroy']);

Route::get('employee', [EmployeeController::class, 'index']);

Route::get('attendance', [AttendanceController::class, 'index']);
Route::post('attendance/store', [AttendanceController::class, 'store']);
Route::get('attendance/show/{id}', [AttendanceController::class, 'show']);












// Route::post('user', [LoginController::class, 'login']);
// Route::post('user/store', [LoginController::class, 'store']);
