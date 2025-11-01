<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\SampleController;

// homepage route
Route::get('/', [SampleController::class, 'sample']);
Route::post('/post', [SampleController::class, 'post']);

// read route
Route::get('/read', [ReadController::class, 'read']);


// edit route
Route::get('/edit/{id}', [EditController::class, 'edit']);
Route::post('/edit-account/{id}', [EditController::class, 'update']);

// delete route
Route::get('/delete/{id}', [DeleteController::class, 'delete']);
