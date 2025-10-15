<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\TTParticiper;
use App\Models\TTPrononcer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTPersonnage
 * 
 * @property string $codePers
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $fonction
 * @property string|null $sexe
 * @property bool|null $gentil
 * 
 * @property Collection|TTParticiper[] $t_t_participers
 * @property Collection|TTPrononcer[] $t_t_prononcers
 *
 * @package App\Models\Base
 */
class TTPersonnage extends Model
{
	protected $table = 'TT_personnage';
	protected $primaryKey = 'codePers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gentil' => 'bool'
	];

	public function t_t_participers()
	{
		return $this->hasMany(TTParticiper::class, 'codePers');
	}

	public function t_t_prononcers()
	{
		return $this->hasMany(TTPrononcer::class, 'codePers');
	}
}
