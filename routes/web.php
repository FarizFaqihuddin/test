<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
* Show Todo Dashboard
*/

Route::get('/todos', [TodoController::class, 'index']);

/**
 *  Show create todo form
 */
Route::get('/todos/create', [TodoController::class, 'create']);

/**
 * Add Todo
 */
Route::post('/todos', [TodoController::class, 'store']);

/**
 * Show edit todo
 */
Route::get('todos/{todo}/edit', [TodoController::class, 'edit']);

/**
 * update todo
 */
Route::put('todos/{todo}', [TodoController::class, 'update']);

/**
 * Delete Todo
 */
Route::get('/todos/{todo}/delete', [TodoController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
