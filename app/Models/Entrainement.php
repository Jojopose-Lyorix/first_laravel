<?php

namespace App\Models;

use App\Models\Base\Entrainement as BaseEntrainement;

class Entrainement extends BaseEntrainement
{
	protected $fillable = [
		'DateEntrainement',
		'Duree',
		'TypeEntrainement'
	];
}
