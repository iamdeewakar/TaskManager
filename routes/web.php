<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
