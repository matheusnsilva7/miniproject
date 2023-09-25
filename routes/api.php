<?php

use App\Http\Controllers\CourseController;
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

Route::get("/users", [UserController::class, "index"]);
Route::post("/users", [UserController::class, "store"]);
Route::get("/users/{id}", [UserController::class, "show"]);
Route::patch("/users/{id}", [UserController::class, "update"]);
Route::delete("/users/{id}", [UserController::class, "destroy"]);

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

Route::get("/", function () {
    return response()->json([
        "status" => "sucess"
    ]);
});
