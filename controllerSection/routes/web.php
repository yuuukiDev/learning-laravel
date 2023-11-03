<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AppController;
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


// better way!

// Route::controller(PostController::class)->group(function(){
//     Route::get('/user/create', 'create');
//     Route::get('/user/edit/{id}', 'edit');
//     Route::get('/user/update/{id}', 'update');
//     Route::get('/user/delete/{id}', 'delete');
// });

// bad way

// Route::get('/user/create', [PostController::class, 'create']);
// Route::get('/user/edit/{id}', [PostController::class, 'edit']);
// Route::get('/user/update/{id}', [PostController::class, 'update']);
// Route::get('/user/delete/{id}', [PostController::class, 'delete']);

// Controller resource

Route::resource('user', AppController::class);

