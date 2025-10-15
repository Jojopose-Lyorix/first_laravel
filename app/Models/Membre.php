<?php

namespace App\Models;

use App\Models\Base\Membre as BaseMembre;

class Membre extends BaseMembre
{
	protected $fillable = [
		'Nom',
		'Prenom',
		'DateNaissance',
		'Email',
		'Niveau'
	];
}
