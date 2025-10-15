<?php

namespace App\Models;

use App\Models\Base\TTPersonnage as BaseTTPersonnage;

class TTPersonnage extends BaseTTPersonnage
{
	protected $fillable = [
		'nom',
		'prenom',
		'fonction',
		'sexe',
		'gentil'
	];
}
