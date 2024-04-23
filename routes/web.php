<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\siteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contact', [siteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
