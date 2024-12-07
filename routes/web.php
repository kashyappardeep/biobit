<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\ActivationController;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Users\RewardsController;
use App\Http\Controllers\Users\TransactionController;
use App\Http\Controllers\Users\TreeController;
use App\Http\Controllers\Users\InvestmentController;
use App\Http\Controllers\Users\SmartContractController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/claimDailyROI', [InvestmentController::class, 'claimDailyROI'])->name('claimDailyROI');
Route::get('/claimRoyalty', [InvestmentController::class, 'check_Royalty_income'])->name('claimRoyalty');
Route::get('/BinaryIncome', [TreeController::class, 'distributeBinaryIncome'])->name('BinaryIncome');
// Route::get('/distributeBinaryIncome', [TreeController::class, 'distributeBinaryIncome'])->name('distributeBinaryIncome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/profile_update', [DashboardController::class, 'updateProfile'])->name('profile_update');
    Route::get('/tree/{sponsorId}', [TreeController::class, 'showTree'])->name('tree');
    Route::get('/reward-chart', [RewardsController::class, 'index'])->name('reward-chart');
    Route::get('/reward', [RewardsController::class, 'reward'])->name('reward');
    Route::post('/rewards/activate/{reward}', [RewardsController::class, 'activateReward'])->name('rewards.activate');

    Route::get('/checkUserActivation', [InvestmentController::class, 'checkUserActivation'])->name('checkUserActivation');

    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
    Route::get('/staking_income', [TransactionController::class, 'staking_income'])->name('staking_income');
    Route::get('/refferal_income', [TransactionController::class, 'refferal_income'])->name('refferal_income');
    Route::get('/level_income', [TransactionController::class, 'level_income'])->name('level_income');
    Route::get('/binary_income', [TransactionController::class, 'binary_income'])->name('binary_income');
    Route::get('/withdrawal_reports', [TransactionController::class, 'withdrawal_reports'])->name('withdrawal_reports');

    Route::get('/my_direct', [ActivationController::class, 'my_direct'])->name('my_direct');
    Route::get('/my_Level', [ActivationController::class, 'my_Level'])->name('my_Level');



    Route::get('/funds', [InvestmentController::class, 'index'])->name('funds');
    Route::get('/staking', [InvestmentController::class, 'staking'])->name('staking');


    Route::post('/investments', [InvestmentController::class, 'store'])->name('investments');
    Route::post('/withdrawal', [SmartContractController::class, 'withdraw'])->name('withdrawal');
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
        Route::get('/user_list', [AdminController::class, 'user_list'])->name('admin.user_list');
    });
});

require __DIR__ . '/auth.php';
