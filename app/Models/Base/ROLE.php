<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\ACCEDER;
use App\Models\DISPOSER;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ROLE
 * 
 * @property int $idRole
 * @property string $NomRole
 * @property string|null $Description
 * 
 * @property Collection|ACCEDER[] $a_c_c_e_d_e_r_s
 * @property Collection|DISPOSER[] $d_i_s_p_o_s_e_r_s
 *
 * @package App\Models\Base
 */
class ROLE extends Model
{
	protected $table = 'ROLE';
	protected $primaryKey = 'idRole';
	public $timestamps = false;

	public function a_c_c_e_d_e_r_s()
	{
		return $this->hasMany(ACCEDER::class, 'idRole');
	}

	public function d_i_s_p_o_s_e_r_s()
	{
		return $this->hasMany(DISPOSER::class, 'idRole');
	}
}
