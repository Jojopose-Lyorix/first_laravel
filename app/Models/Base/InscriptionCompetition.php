<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Competition;
use App\Models\Membre;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InscriptionCompetition
 * 
 * @property int $InscriptionID
 * @property Carbon $DateInscription
 * @property string $PlaceResultat
 * @property int $MembreID
 * @property int $CompetitionID
 * 
 * @property Competition $competition
 * @property Membre $membre
 *
 * @package App\Models\Base
 */
class InscriptionCompetition extends Model
{
	protected $table = 'InscriptionCompetition';
	protected $primaryKey = 'InscriptionID';
	public $timestamps = false;

	protected $casts = [
		'DateInscription' => 'datetime',
		'MembreID' => 'int',
		'CompetitionID' => 'int'
	];

	public function competition()
	{
		return $this->belongsTo(Competition::class, 'CompetitionID');
	}

	public function membre()
	{
		return $this->belongsTo(Membre::class, 'MembreID');
	}
}
