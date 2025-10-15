<?php

namespace App\Models;

use App\Models\Base\InscriptionCompetition as BaseInscriptionCompetition;

class InscriptionCompetition extends BaseInscriptionCompetition
{
	protected $fillable = [
		'DateInscription',
		'PlaceResultat',
		'MembreID',
		'CompetitionID'
	];
}
