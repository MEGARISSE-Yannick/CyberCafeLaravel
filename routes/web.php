<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});

*/
//route pour afficher les utilisateur de la bdd
use App\Http\Controllers\UserController;
Route::resource('users',UserController::class);

//route pour afficher les postes de la bdd
use App\Http\Controllers\PosteController;
Route::resource('postes',PosteController::class);
