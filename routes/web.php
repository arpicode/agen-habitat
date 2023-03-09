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
Route::get('/enregistrer', [UserController::class, 'create'])->middleware(['auth', 'super']);
Route::post('/users', [UserController::class, 'store'])->middleware(['auth', 'super']);
Route::get('/connecter', [UserController::class, 'login'])->name('login');
Route::post('/deconnecter', [UserController::class, 'logout'])->middleware('auth');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

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
