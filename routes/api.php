<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('add-teacher', [TeacherController::class, 'adding']);
Route::post('add-student', [StudentController::class, 'adding']);

Route::put('edit-teacher', [TeacherController::class, 'edit']);
Route::put('edit-student', [StudentController::class, 'edit']);

Route::delete('delete-teacher', [TeacherController::class, 'delete']);
Route::delete('delete-student', [StudentController::class, 'delete']);

Route::get('getdata-teacher', [TeacherController::class, 'getData']);
Route::get('getdata-student', [StudentController::class, 'getData']);
