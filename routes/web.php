<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TranscribeController;
use App\Http\Controllers\GeminiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/transcribe', [TranscribeController::class, 'index'])->name('transcribe.index');
Route::get('/gemini', [GeminiController::class, 'index'])->name('gemini.index');
