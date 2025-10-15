<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\TTPrononcer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTJuron
 * 
 * @property string $codeJuron
 * @property string|null $nomJuron
 * 
 * @property Collection|TTPrononcer[] $t_t_prononcers
 *
 * @package App\Models\Base
 */
class TTJuron extends Model
{
	protected $table = 'TT_juron';
	protected $primaryKey = 'codeJuron';
	public $incrementing = false;
	public $timestamps = false;

	public function t_t_prononcers()
	{
		return $this->hasMany(TTPrononcer::class, 'codeJuron');
	}
}
