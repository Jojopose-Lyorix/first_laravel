<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/test', [TestController::class, 'index']);


Route::get('/', function () {
    return view('acceuil');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/mention', function () {
    return view('mention');
});
