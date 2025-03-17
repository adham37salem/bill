<?php

use App\Livewire\Front\Home;
use App\Livewire\Front\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('welcome');

Route::get("/login", Login::class)->name('login');

Route::group(["prefix" => "bills"], function () {
    Route::get("old-bills", \App\Livewire\Front\Bills\View::class)->name('bills.old');
});
