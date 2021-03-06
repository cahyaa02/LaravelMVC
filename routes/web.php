<?php

use App\Models\Project;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CourseResourceController;
use App\Http\Controllers\ProjectResourceController;

//Route::get('/URL page', [class, 'function']);
//* Home
Route::get('/', [Controller::class, 'home']);

//* Contact
Route::get('/contact', [Controller::class, 'contact']);

//* Project
Route::resource('project', ProjectResourceController::class);

//* Course
Route::resource('course', CourseResourceController::class);

// //* Project
// Route::get('/project', [ProjectController::class, 'index']);

// //* Detail Project
// Route::get('/project/{code}', [ProjectController::class, 'show']);

// //* Create Project
// Route::post('/project', [ProjectController::class, 'store']);

// //* Create Project (Form)
// Route::get('/create-project', [ProjectController::class, 'goToForm']);

// //* Edit Project (Form)
// Route::get('/edit-project/{id}', [ProjectController::class, 'goToFormEdit']);

// //* Edit Project
// Route::post('/project/edit', [ProjectController::class, 'edit']);

// //* Delete Project
// Route::get('/delete-project/{id}', [ProjectController::class, 'destroy']);

// //* Course
// Route::get('/course', [CourseController::class, 'index']);

// //* Detail Course
// Route::get('/course/{course_code}', [CourseController::class, 'show']);

// //* Create Course
// Route::post('/course', [CourseController::class, 'store']);

// //* Create Course (Form)
// Route::get('/create-course', [CourseController::class, 'goToForm']);

// //* Edit Course (Form)
// Route::get('/edit-course/{course_code}', [CourseController::class, 'goToFormEdit']);

// //* Edit Course
// Route::post('/course/edit', [CourseController::class, 'edit']);

// //* Delete Course
// Route::get('/delete-course/{course_code}', [CourseController::class, 'destroy']);
