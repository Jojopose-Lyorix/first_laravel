<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Entrainement;
use App\Models\Membre;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PARTICIPE
 * 
 * @property int $EntrainementID
 * @property int $MembreID
 * 
 * @property Entrainement $entrainement
 * @property Membre $membre
 *
 * @package App\Models\Base
 */
class PARTICIPE extends Model
{
	protected $table = 'PARTICIPE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'EntrainementID' => 'int',
		'MembreID' => 'int'
	];

	public function entrainement()
	{
		return $this->belongsTo(Entrainement::class, 'EntrainementID');
	}

	public function membre()
	{
		return $this->belongsTo(Membre::class, 'MembreID');
	}
}
