<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Court;
use App\Models\Membre;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $ReservationID
 * @property Carbon $DateReservation
 * @property int $Duree
 * @property int $MembreID
 * @property int $CourtID
 * 
 * @property Court $court
 * @property Membre $membre
 *
 * @package App\Models\Base
 */
class Reservation extends Model
{
	protected $table = 'Reservation';
	protected $primaryKey = 'ReservationID';
	public $timestamps = false;

	protected $casts = [
		'DateReservation' => 'datetime',
		'Duree' => 'int',
		'MembreID' => 'int',
		'CourtID' => 'int'
	];

	public function court()
	{
		return $this->belongsTo(Court::class, 'CourtID');
	}

	public function membre()
	{
		return $this->belongsTo(Membre::class, 'MembreID');
	}
}
