<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\ActivationController;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Users\RewardsController;
use App\Http\Controllers\Users\TransactionController;
use App\Http\Controllers\Users\InvestmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/claimDailyROI', [InvestmentController::class, 'claimDailyROI'])->name('claimDailyROI');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/reward-chart', [RewardsController::class, 'index'])->name('reward-chart');
    Route::get('/reward', [RewardsController::class, 'reward'])->name('reward');
    Route::post('/rewards/activate/{reward}', [RewardsController::class, 'activateReward'])->name('rewards.activate');
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
    Route::get('/funds', [InvestmentController::class, 'index'])->name('funds');
    Route::post('/investments', [InvestmentController::class, 'store'])->name('investments');
    Route::post('/withdrawal', [InvestmentController::class, 'withdrawal'])->name('withdrawal');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('/id_activate', [ActivationController::class, 'id_activate'])->name('id_activate');
});

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'showLoginForm']);
    Route::post('adminlogin', [AdminController::class, 'login'])->name('adminlogin');
    // In routes/web.php
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Add other admin routes that require authentication
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});

require __DIR__ . '/auth.php';
