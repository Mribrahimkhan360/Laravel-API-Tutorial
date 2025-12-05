<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [ApiController::class, 'getAllStudents']);
Route::get('/students/{id}', [ApiController::class, 'getStudent']);
Route::post('/students/create', [ApiController::class, 'createStudent']);
Route::put('/students/update/{id}', [ApiController::class, 'updateStudent']);
Route::delete('/students/delete/{id}', [ApiController::class, 'deleteStudent']);
