<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\DISPOSER;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PjPassword
 * 
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $mail
 * @property Carbon|null $datecodes
 * @property string $code
 * 
 * @property Collection|DISPOSER[] $d_i_s_p_o_s_e_r_s
 *
 * @package App\Models\Base
 */
class PjPassword extends Model
{
	protected $table = 'Pj_password';
	public $timestamps = false;

	protected $casts = [
		'datecodes' => 'datetime'
	];

	public function d_i_s_p_o_s_e_r_s()
	{
		return $this->hasMany(DISPOSER::class, 'idUtilisateur');
	}
}
