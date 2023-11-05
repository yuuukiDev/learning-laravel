<?php
use App\Http\Controllers\PostController;
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

Route::controller(PostController::class)->group(function(){
    Route::get('posts', 'index');
    Route::get('post/create', 'create');
    Route::post('post/insert', 'insert')->name('posts.insert');
    Route::get('post/edit/{id}', 'edit')->name('posts.edit');
    Route::post('post/update/{id}', 'update')->name('posts.update');
    Route::get('post/delete/{id}', 'delete')->name('posts.delete');
    Route::get('post/delete', 'deleteAll')->name('posts.deleteAll');
});
