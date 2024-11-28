<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\HistoryPage;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');

    Route::get('history', HistoryPage::class)
        ->name('history');
});

require __DIR__.'/auth.php';
