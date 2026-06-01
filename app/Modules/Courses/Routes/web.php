<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Courses\Controllers\CourseController;

Route::get('/courses', [CourseController::class, 'index'])
    ->name('courses.index');