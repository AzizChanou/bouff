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

Route::inertia('/CGU', 'Infos/Cgu')
    ->name('cgu');

Route::inertia('CGV', 'Infos/Cgv')
    ->name('cgv');

require __DIR__ . '/auth.php';



// Route::resource('advertising', AdvertisingController::class);
// Route::resource('rating', RatingController::class);
// Route::resource('profil', OrderItemController::class);
// Route::resource('profil', FoodCategoryController::class);
