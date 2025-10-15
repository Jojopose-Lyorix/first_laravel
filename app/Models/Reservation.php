<?php

namespace App\Models;

use App\Models\Base\Reservation as BaseReservation;

class Reservation extends BaseReservation
{
	protected $fillable = [
		'DateReservation',
		'Duree',
		'MembreID',
		'CourtID'
	];
}
