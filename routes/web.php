<?php

use App\Http\Controllers\Site\siteController;
use Illuminate\Support\Facades\Route;


Route::get('/contact', [siteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
