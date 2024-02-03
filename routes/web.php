<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\UploadController;

Route::get('/', [GroupController::class, 'show'])->name('show');

Route::get('/Signup', [GroupController::class,'create'])->name('create');

Route::post('/store', [GroupController::class,'store'])->name('store');

Route::get('/Signup2', [LeaderController::class,'create2'])->name('create2');

Route::post('/store2', [LeaderController::class,'store2'])->name('store2');

Route::get('/Upload', [UploadController::class,'create3'])->name('create3');

Route::post('/store3', [UploadController::class,'store3'])->name('store3');

// Route::get('/Home', [UploadController::class, 'show2'])->name('show2');
