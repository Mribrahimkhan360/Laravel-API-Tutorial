<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// RESTful API Routes for Students
Route::get('students', [ApiController::class, 'getAllStudents']);   // List all students
Route::get('students/{id}', [ApiController::class, 'getStudent']);  // Get single student
Route::post('students', [ApiController::class, 'createStudent']);   // Create student
Route::put('students/{id}', [ApiController::class, 'updateStudent']); // Update student
Route::delete('students/{id}', [ApiController::class, 'deleteStudent']); // Delete student
