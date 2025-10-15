<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\TTDerouler;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTPay
 * 
 * @property string $codePays
 * @property string|null $nom
 * 
 * @property Collection|TTDerouler[] $t_t_deroulers
 *
 * @package App\Models\Base
 */
class TTPay extends Model
{
	protected $table = 'TT_pays';
	protected $primaryKey = 'codePays';
	public $incrementing = false;
	public $timestamps = false;

	public function t_t_deroulers()
	{
		return $this->hasMany(TTDerouler::class, 'codePays');
	}
}
