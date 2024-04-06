<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TranscribeController;
use App\Http\Controllers\GeminiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/transcribe', [TranscribeController::class, 'index'])->name('transcribe.index');
Route::post('/transcribe', [TranscribeController::class, 'transcribe'])->name('transcribe.post');
Route::get('/transcribe/result', [TranscribeController::class, 'result'])->name('transcribe.result');
Route::get('/gemini', [GeminiController::class, 'index'])->name('gemini.index');
