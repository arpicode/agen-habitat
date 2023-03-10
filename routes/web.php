<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InspecteurController;
use App\Http\Controllers\SuperAdminController;

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
    return view('index');
});

/**
 * Routes pour l'authentification.
 */
Route::get('/connecter', [UserController::class, 'login'])->name('login');
Route::post('/deconnecter', [UserController::class, 'logout'])->middleware('auth');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/**
 * Users Routes - Gestion des utilisateurs
 * 
 * index - Show all users
 * (show - Show single user)
 * create - Show form to create new user
 * store - Store new user in database
 * edit - Show form to edit user
 * update - Update user in database
 * delete - Show confirmation form to delete user
 * destroy - Delete user from database
 */
Route::middleware(['auth', 'super'])->name('users')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create']);
    // Route::get('/enregistrer', [UserController::class, 'create']);
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/{user}/{employe}/edit', [UserController::class, 'edit']);
    Route::put('/users/{user}/{employe}', [UserController::class, 'update']);
    Route::get('/users/{user}/delete', [UserController::class, 'delete']);
    // Route::delete('/users/{user}', [UserController::class, 'destroy']);
});

/**
 * Routes des inspecteurs
 */
Route::get('/inspecteur', [InspecteurController::class, 'index'])->middleware(['auth', 'inspecteur']);

/**
 * Routes des admins
 */
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'admin']);

/**
 * Routes des supers admins
 */
Route::get('/superadmin', [SuperAdminController::class, 'index'])->middleware(['auth', 'super']);
