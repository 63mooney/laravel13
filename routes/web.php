<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

Route::resource('pelanggan', \App\Http\Controllers\PelangganController::class);

Route::resource('portfolio', \App\Http\Controllers\PortfolioController::class);

Route::resource('user', \App\Http\Controllers\UserController::class);
