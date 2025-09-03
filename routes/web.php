<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::get('/fast-text-1', function () {
    return 'This is fast text response 1';
});

Route::get('/fast-text-2', function () {
    return 'This is fast text response 2';
});

Route::get('/slow-text-1', function () {
    sleep(5);
    return 'This is slow text response 1';
});

Route::get('/slow-text-2', function () {
    sleep(9);
    return 'This is slow text response 2';
});

Route::get('/livewire-test', function () {
    return view('livewire-test');
})->name('livewire.test');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
