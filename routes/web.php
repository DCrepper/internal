<?php

use App\Http\Controllers\NewAppCreator;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('/new',[NewAppCreator::class,'create'])->middleware(['auth']);
require __DIR__.'/auth.php';
