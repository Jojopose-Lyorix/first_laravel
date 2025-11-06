<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Support\Str;

class GestionEleveController extends Controller
{
    // Liste des élèves
    public function consulter(): View
    {
        $eleves = Utilisateur::whereIn('code_statut', ['N', 'A'])->get();
        return view('consulter', compact('eleves'));
    }

    // Formulaire de modification
    public function edit($id): View
    {
        $eleve = Utilisateur::findOrFail($id);

        // Charger l'email depuis le modèle User
        $eleve->email = $eleve->user->email ?? '';

        return view('modification_eleve', compact('eleve'));
    }

    // Mise à jour de l'élève
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'classe' => 'required|string|max:10',
            'genre' => 'required|string|in:F,H,I',
            'email' => 'required|email',
        ]);

        $eleve = Utilisateur::findOrFail($id);
        $user = $eleve->user;

        // Mettre à jour le User et l'Utilisateur
        if ($user) {
            $user->update(['email' => $validated['email']]);
        }

        $eleve->update([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'classe' => $validated['classe'],
            'code_genre' => $validated['genre'],
        ]);

        return redirect()->route('consultation_eleve')
                         ->with('success', 'Élève modifié avec succès !');
    }

    // Formulaire d'ajout
    public function create(): View
    {
        return view('ajout_eleve');
    }

    // Stockage d'un nouvel élève
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'classe' => 'required|string|max:10',
            'genre' => 'required|string|in:F,H,I',
            'email' => 'required|email|unique:users,email',
        ]);

        $password = Str::random(10);

        $user = User::create([
            'name' => $validated['prenom'] . ' ' . $validated['nom'],
            'email' => $validated['email'],
            'password' => bcrypt($password),
        ]);

        Utilisateur::create([
            'id' => $user->id,
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'classe' => $validated['classe'],
            'code_genre' => $validated['genre'],
            'code_statut' => 'N',
            'id_college' => 1000,
            'id_equipe' => null,
            'commentaire' => $validated['email'],
        ]);

        return redirect()->route('consulter')
                         ->with('success', 'Élève ajouté avec succès ! ');
    }
}
