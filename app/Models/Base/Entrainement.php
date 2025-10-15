<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\PARTICIPE;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrainement
 * 
 * @property int $EntrainementID
 * @property Carbon $DateEntrainement
 * @property int $Duree
 * @property string $TypeEntrainement
 * 
 * @property Collection|PARTICIPE[] $p_a_r_t_i_c_i_p_e_s
 *
 * @package App\Models\Base
 */
class Entrainement extends Model
{
	protected $table = 'Entrainement';
	protected $primaryKey = 'EntrainementID';
	public $timestamps = false;

	protected $casts = [
		'DateEntrainement' => 'datetime',
		'Duree' => 'int'
	];

	public function p_a_r_t_i_c_i_p_e_s()
	{
		return $this->hasMany(PARTICIPE::class, 'EntrainementID');
	}
}
