<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\InscriptionCompetition;
use App\Models\PARTICIPE;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Membre
 * 
 * @property int $MembreID
 * @property string $Nom
 * @property string $Prenom
 * @property Carbon $DateNaissance
 * @property string $Email
 * @property string $Niveau
 * 
 * @property Collection|InscriptionCompetition[] $inscription_competitions
 * @property Collection|PARTICIPE[] $p_a_r_t_i_c_i_p_e_s
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models\Base
 */
class Membre extends Model
{
	protected $table = 'Membre';
	protected $primaryKey = 'MembreID';
	public $timestamps = false;

	protected $casts = [
		'DateNaissance' => 'datetime'
	];

	public function inscription_competitions()
	{
		return $this->hasMany(InscriptionCompetition::class, 'MembreID');
	}

	public function p_a_r_t_i_c_i_p_e_s()
	{
		return $this->hasMany(PARTICIPE::class, 'MembreID');
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class, 'MembreID');
	}
}
