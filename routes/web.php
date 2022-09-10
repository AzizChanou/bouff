<?php

use App\Http\Controllers\EateryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('eatery/{eatery}', [EateryController::class, 'show'])
    ->name('eatery.show');

Route::inertia('/about', 'Infos/About')
    ->name('about');

Route::inertia('/faqs', 'Infos/Faqs')
    ->name('faqs');

Route::inertia('/cgu', 'Infos/Cgu')
    ->name('cgu');

Route::inertia('cgv', 'Infos/Cgv')
    ->name('cgv');

Route::inertia('stats', 'Orphan/Stat')
    ->name('stats');

require __DIR__ . '/auth.php';
