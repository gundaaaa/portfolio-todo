<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
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

Route::get('profile', [PortfolioController::class, 'profile']);
Route::get('works', [PortfolioController::class, 'works']);
Route::get('Design', [PortfolioController::class, 'design']);
Route::get('Front', [PortfolioController::class, 'front']);
Route::get('about', [PortfolioController::class, 'about']);
Route::get('contact', [PortfolioController::class, 'contact']);
Route::post('contact', [PortfolioController::class, 'contact']);
