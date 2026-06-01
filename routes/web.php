<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

require base_path('app/Modules/Students/Routes/web.php');
require base_path('app/Modules/Courses/Routes/web.php');