<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PyramidController;

Route::get('/', [PyramidController::class, 'index']);
Route::post('/generate', [PyramidController::class, 'generate']);

// Route::get('/', function () {
//     return view('welcome');
// });
