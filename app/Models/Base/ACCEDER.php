<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\PAGE;
use App\Models\ROLE;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ACCEDER
 * 
 * @property int $idPage
 * @property int $idRole
 * 
 * @property PAGE $p_a_g_e
 * @property ROLE $r_o_l_e
 *
 * @package App\Models\Base
 */
class ACCEDER extends Model
{
	protected $table = 'ACCEDER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idPage' => 'int',
		'idRole' => 'int'
	];

	public function p_a_g_e()
	{
		return $this->belongsTo(PAGE::class, 'idPage');
	}

	public function r_o_l_e()
	{
		return $this->belongsTo(ROLE::class, 'idRole');
	}
}
