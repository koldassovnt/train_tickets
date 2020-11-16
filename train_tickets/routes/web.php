<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contacts', [HomeController::class, 'contacts']);

Route::get('/logout', [LoginController::class, 'destroy']);

Route::resources([
    'login' => LoginController::class,
]);

Route::resources([
    'register' => RegisterController::class,
]);


Route::resources([
    'admin' => AdminController::class,
]);

Route::resources([
    'admin-cities' => CityController::class,
]);

Route::resources([
    'admin-trains' => TrainController::class,
]);

Route::resources([
    'admin-tickets' => TicketController::class,
]);