<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\TTAlbum;
use App\Models\TTPersonnage;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTParticiper
 * 
 * @property string $codeAlbum
 * @property string $codePers
 * 
 * @property TTAlbum $t_t_album
 * @property TTPersonnage $t_t_personnage
 *
 * @package App\Models\Base
 */
class TTParticiper extends Model
{
	protected $table = 'TT_participer';
	public $incrementing = false;
	public $timestamps = false;

	public function t_t_album()
	{
		return $this->belongsTo(TTAlbum::class, 'codeAlbum');
	}

	public function t_t_personnage()
	{
		return $this->belongsTo(TTPersonnage::class, 'codePers');
	}
}
