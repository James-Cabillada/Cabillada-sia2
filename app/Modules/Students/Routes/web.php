<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Students\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');