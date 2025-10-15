<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\TTAlbum;
use App\Models\TTPay;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTDerouler
 * 
 * @property string $codeAlbum
 * @property string $codePays
 * 
 * @property TTAlbum $t_t_album
 * @property TTPay $t_t_pay
 *
 * @package App\Models\Base
 */
class TTDerouler extends Model
{
	protected $table = 'TT_derouler';
	public $incrementing = false;
	public $timestamps = false;

	public function t_t_album()
	{
		return $this->belongsTo(TTAlbum::class, 'codeAlbum');
	}

	public function t_t_pay()
	{
		return $this->belongsTo(TTPay::class, 'codePays');
	}
}
