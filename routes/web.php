<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'accueil');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('ajout_eleve', 'ajout_eleve')
    
    ->name('ajout_eleve');
    

Route::get('/hello', function(){
return 'Bonjour le monde!';
});
require __DIR__.'/auth.php';
