<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProfilController;

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

Route::get('/profils', [ProfilController::class, 'index']);

/**
 *  Show create profil form
 */
Route::get('/profils/create', [ProfilController::class, 'create']);

/**
 * Add profil
 */
Route::post('/profils', [ProfilController::class, 'store']);

/**
 * Show edit profil
 */
Route::get('profils/{profil}/edit', [ProfilController::class, 'edit']);

/**
 * update profil
 */
Route::put('profils/{profil}', [ProfilController::class, 'update']);

/**
 * Delete profil
 */
Route::get('/profils/{profil}/delete', [ProfilController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
