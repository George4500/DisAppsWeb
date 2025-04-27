<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperheroApiController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\UniverseApiController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GenderApiController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\FileController;

// Ruta principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Recursos
Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperheroController::class);
Route::resource('genders', GenderController::class);

// API Universes
Route::get('/apiuniverses', [UniverseApiController::class, 'index']);
Route::get('/apiuniverses/{name}', [UniverseApiController::class, 'show']);
Route::delete('/apiuniverses/{name}', [UniverseApiController::class, 'destroy']);

// API Genders
Route::get('/apigenders', [GenderApiController::class, 'index']);
Route::get('/apigenders/{name}', [GenderApiController::class, 'show']);
Route::delete('/apigenders/{name}', [GenderApiController::class, 'destroy']);

// API Superheroes
Route::get('/apisuperheroes', [SuperheroApiController::class, 'index']);
Route::get('/apisuperheroes/{name}', [SuperheroApiController::class, 'show']);
Route::delete('/apisuperheroes/{id}', [SuperheroApiController::class, 'destroy']);

// FileController
Route::post('/file', [FileController::class, 'index'])->name('file.index');
Route::post('/file/upload', [FileController::class, 'upload'])->name('file.upload');
Route::get('/file/download/{path}', [FileController::class, 'download'])->name('file.download');

// Autenticación
require __DIR__.'/auth.php';
