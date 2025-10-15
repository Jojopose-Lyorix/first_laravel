<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\ACCEDER;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PAGE
 * 
 * @property int $idPage
 * @property string|null $Description
 * @property string $NomPage
 * 
 * @property Collection|ACCEDER[] $a_c_c_e_d_e_r_s
 *
 * @package App\Models\Base
 */
class PAGE extends Model
{
	protected $table = 'PAGE';
	protected $primaryKey = 'idPage';
	public $timestamps = false;

	public function a_c_c_e_d_e_r_s()
	{
		return $this->hasMany(ACCEDER::class, 'idPage');
	}
}
