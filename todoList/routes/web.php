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

Route::controller(TodoController::class)->group(function(){
    Route::get('todos', 'index')->name('todo.index');
    Route::get('todo/create', 'create')->name('todo.create');
    Route::post('todo/store', 'store')->name('todo.store');
    Route::get('todo/edit/{id}', 'edit')->name('todo.edit');
    Route::post('todo/update/{id}', 'update')->name('todo.update');
    Route::get('todo/finished/{id}', 'finished')->name('todo.finish');
    Route::get('todo/notfinished/{id}', 'notFinished')->name('todo.notFinish');
    Route::get('todo/destroy/{id}', 'destroy')->name('todo.destroy');
});


