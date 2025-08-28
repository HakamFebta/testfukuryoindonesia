<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Master\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/master_category', [CategoryController::class, 'index'])->name('m_category');
Route::post('/list_master_category', [CategoryController::class, 'list_category'])->name('list_m_category');
Route::post('/delete_master_category', [CategoryController::class, 'delete_category'])->name('delete_m_category');
