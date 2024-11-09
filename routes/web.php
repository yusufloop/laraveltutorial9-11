<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/helloworld', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
Route::get('/', [TaskController::class , 'index'])->name('task.index');
Route::get('/task/{task}', [TaskController::class, 'show'])->name('task.show');


