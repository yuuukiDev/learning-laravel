<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', [TodoController::class, 'index'])->name('todo.index');
Route::get('todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::get('todo/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::post('todo/finished/{id}', [TodoController::class, 'isFinished'])->name('todo.finish');
Route::get('todo/destroy/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');


