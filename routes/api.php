<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
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

Route::get("/students", [StudentsController::class, "index"]);
Route::post("/students", [StudentsController::class, "store"]);
Route::get("/students/{id}", [StudentsController::class, "show"]);
Route::patch("/students/{id}", [StudentsController::class, "update"]);
Route::delete("/students/{id}", [StudentsController::class, "destroy"]);

Route::get("/teachers", [TeacherController::class, "index"]);
Route::post("/teachers", [TeacherController::class, "store"]);
Route::get("/teachers/{id}", [TeacherController::class, "show"]);
Route::patch("/teachers/{id}", [TeacherController::class, "update"]);
Route::delete("/teachers/{id}", [TeacherController::class, "destroy"]);

Route::get("/courses", [CourseController::class, "index"]);
Route::post("/courses", [CourseController::class, "store"]);
Route::get("/courses/{id}", [CourseController::class, "show"]);
Route::patch("/courses/{id}", [CourseController::class, "update"]);
Route::delete("/courses/{id}", [CourseController::class, "destroy"]);

Route::get("/attendance", [AttendanceController::class, "index"]);
Route::post("/attendance", [AttendanceController::class, "store"]);
Route::get("/attendance/{id}", [AttendanceController::class, "show"]);
Route::patch("/attendance/{id}", [AttendanceController::class, "update"]);
Route::delete("/attendance/{id}", [AttendanceController::class, "destroy"]);

Route::get("/", function () {
    return response()->json([
        "status" => "sucess"
    ]);
});
