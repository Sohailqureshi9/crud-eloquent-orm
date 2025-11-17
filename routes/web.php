<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;

// Route::get('/', [StudentController::class, 'index'])->name('index');
// Route::post('/', [StudentController::class, 'create'])->name('create');
// Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
// Route::put('/edit/{id}', [StudentController::class, 'update'])->name('update');
// Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',            [StudentController::class, 'index'])->name('index');
Route::post('/',           [StudentController::class, 'store'])->name('students.store');

Route::get('/edit/{id}',   [StudentController::class, 'edit'])->name('edit');
Route::put('/edit/{id}',   [StudentController::class, 'update'])->name('update');

// Better to use DELETE method, but if you want to keep GET, it's fine.
// I’ll show you the proper DELETE version:
Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');
