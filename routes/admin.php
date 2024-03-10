<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [DashboardController::class, 'index']);
Route::get('/dashboard/translate', function () {
    return view('admin.translate');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[\App\Models\AdminController::class,'index'])
->name('dashboard');
});

