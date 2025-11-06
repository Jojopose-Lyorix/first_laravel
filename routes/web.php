<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionEleveController;

// Accueil
Route::view('/', 'accueil')->name('accueil');

// Dashboard (tu peux le garder mais sans auth pour le moment)
Route::view('dashboard', 'dashboard')->name('dashboard');

// Profile
Route::view('profile', 'profile')->name('profile');

// Formulaire d'ajout d'un élève (sans auth)
Route::get('ajout_eleve', [GestionEleveController::class, 'create'])->name('ajout_eleve');
Route::post('ajout_eleve', [GestionEleveController::class, 'store'])->name('ajout_eleve.store');

// Liste des élèves
Route::get('gestion_eleve', [GestionEleveController::class, 'consulter'])
    ->name('consulter');


// Formulaire de modification d'un élève (sans auth)
Route::get('modification_eleve/{eleve}', [GestionEleveController::class, 'edit'])->name('modification_eleve');
Route::put('modification_eleve/{eleve}', [GestionEleveController::class, 'update'])->name('modification_eleve.update');

// Exemple simple
Route::get('/hello', function () {
    return 'Bonjour le monde!';
});

require __DIR__.'/auth.php';
