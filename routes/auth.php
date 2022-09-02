<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\RedirectAuthenticatedUserController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredEateryController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DelivererController;
use App\Http\Controllers\EateryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('register/eatery', [RegisteredEateryController::class, 'create'])
        ->name('register.eatery');
    Route::post('register/eatery', [RegisteredEateryController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});


Route::middleware('auth')->group(function () {

    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/redirectAuthenticatedUser', [RedirectAuthenticatedUserController::class, 'home']);

    Route::group(['middleware' => 'checkRole:user'], function () {
        Route::resource('user', UserController::class)->except('create', 'store');
        Route::get('order', [OrderController::class, 'user'])
            ->name('order.user');
        Route::post('order', [OrderController::class, 'store'])
            ->name('order.store');
        Route::get('order/delivered/{order}', [OrderController::class, 'delivered'])
            ->name('order.delivered');
    });


    Route::group(['middleware' => 'checkRole:deliverer'], function () {
        Route::resource('deliverer', DelivererController::class);
        Route::get('order/deliverer', [OrderController::class, 'deliverer'])
            ->name('order.deliverer');
        Route::get('order/treateddeliverer', [OrderController::class, 'treateddeliverer'])
            ->name('order.treateddeliverer');
        Route::get('order/retrieve/{order}', [OrderController::class, 'retrieve'])
            ->name('order.retrieve');
        Route::get('order/getorder/{order}', [OrderController::class, 'getorder'])
            ->name('order.getorder');
    });


    Route::group(['middleware' => 'checkRole:eatery'], function () {
        Route::resource('food', FoodController::class)->except('show');
        Route::resource('eatery', EateryController::class)->except('show');
        Route::get('stats/eatery', [EateryController::class, 'stats'])
            ->name('eatery.stats');
        Route::get('order/eatery', [OrderController::class, 'eatery'])
            ->name('order.eatery');
        Route::get('order/treatedeatery', [OrderController::class, 'treatedeatery'])
            ->name('order.treatedeatery');
        Route::get('order/ready/{order}', [OrderController::class, 'ready'])
            ->name('order.ready');
    });
});
