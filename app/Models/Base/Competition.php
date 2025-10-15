<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\InscriptionCompetition;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Competition
 * 
 * @property int $CompetitionID
 * @property string $NomCompetition
 * @property Carbon $DateDebut
 * @property Carbon $DateFin
 * @property string $Lieu
 * 
 * @property Collection|InscriptionCompetition[] $inscription_competitions
 *
 * @package App\Models\Base
 */
class Competition extends Model
{
	protected $table = 'Competition';
	protected $primaryKey = 'CompetitionID';
	public $timestamps = false;

	protected $casts = [
		'DateDebut' => 'datetime',
		'DateFin' => 'datetime'
	];

	public function inscription_competitions()
	{
		return $this->hasMany(InscriptionCompetition::class, 'CompetitionID');
	}
}
