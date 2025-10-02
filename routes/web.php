<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SampleController::class, 'sample']);

Route::get('/list', [SampleController:: class, 'list']);

Route::post('/post', [SampleController::class, 'post']);
