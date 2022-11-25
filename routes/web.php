<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;

#student IMAGE-CRUD
Route::put('update-course/{id}',[CoursesController::class, 'update']);

Route::get('delete-course/{id}' ,[CoursesController::class, 'destroy']);
Route::get('courses1',[CoursesController::class, 'indexs']);
Route::get('courses', [CoursesController::class, 'index']);
Route::get('add-course',[CoursesController::class, 'create']);
Route::get('edit-course/{id}', [CoursesController::class, 'edit']);
Route::get('goto-course/{id}',[CoursesController::class, 'indexss']);


Route::post('add-course', [CoursesController::class, 'store']);




