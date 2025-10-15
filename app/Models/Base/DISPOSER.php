<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\PjPassword;
use App\Models\ROLE;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DISPOSER
 * 
 * @property int $idRole
 * @property int $idUtilisateur
 * 
 * @property ROLE $r_o_l_e
 * @property PjPassword $pj_password
 *
 * @package App\Models\Base
 */
class DISPOSER extends Model
{
	protected $table = 'DISPOSER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idRole' => 'int',
		'idUtilisateur' => 'int'
	];

	public function r_o_l_e()
	{
		return $this->belongsTo(ROLE::class, 'idRole');
	}

	public function pj_password()
	{
		return $this->belongsTo(PjPassword::class, 'idUtilisateur');
	}
}
