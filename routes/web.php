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
// お問い合わせの表示
Route::get('contact', [PortfolioController::class, 'contact']);
// お問い合わせをDBに入れる為の表示
Route::post('contact', [PortfolioController::class, 'contacts']);
Route::get('sss', [PortfolioController::class, 'sss']);
