<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    // ✅ Nom correct de la table
    protected $table = 'utilisateurs';
    
    protected $primaryKey = 'id';
    
    // ✅ Pas d'auto-increment car l'id vient de mcd_users
    public $incrementing = false;
    
    protected $keyType = 'int';
    
    // ✅ Toutes les colonnes qui peuvent être remplies
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'classe',
        'code_genre',
        'code_statut',
        'id_college',
        'id_equipe',
        'commentaire',
    ];
    
    // ✅ La table a bien created_at et updated_at
    public $timestamps = true;
    
    // Relation avec User
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}