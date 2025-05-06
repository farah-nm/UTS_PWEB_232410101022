<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'doLogin']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengingat', [PageController::class, 'pengingat'])->name('pengingat');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');

