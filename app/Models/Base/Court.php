<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Court
 * 
 * @property int $CourtID
 * @property int $NumeroCourt
 * @property int $TypeCourt
 * 
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models\Base
 */
class Court extends Model
{
	protected $table = 'Court';
	protected $primaryKey = 'CourtID';
	public $timestamps = false;

	protected $casts = [
		'NumeroCourt' => 'int',
		'TypeCourt' => 'int'
	];

	public function reservations()
	{
		return $this->hasMany(Reservation::class, 'CourtID');
	}
}
