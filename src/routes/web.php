<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightLogController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// 🔒 認証済みユーザー専用
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // 例：体重記録関連ルート
    Route::get('/weight_logs', [WeightLogController::class, 'index'])->name('weight_logs.index');
    Route::get('/weight_logs/create', [WeightLogController::class, 'create'])->name('weight_logs.create');
});