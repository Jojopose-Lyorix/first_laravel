<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\TTAlbum;
use App\Models\TTJuron;
use App\Models\TTPersonnage;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTPrononcer
 * 
 * @property string $codeAlbum
 * @property string $codePers
 * @property string $codeJuron
 * @property int $numpage
 * 
 * @property TTAlbum $t_t_album
 * @property TTPersonnage $t_t_personnage
 * @property TTJuron $t_t_juron
 *
 * @package App\Models\Base
 */
class TTPrononcer extends Model
{
	protected $table = 'TT_prononcer';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numpage' => 'int'
	];

	public function t_t_album()
	{
		return $this->belongsTo(TTAlbum::class, 'codeAlbum');
	}

	public function t_t_personnage()
	{
		return $this->belongsTo(TTPersonnage::class, 'codePers');
	}

	public function t_t_juron()
	{
		return $this->belongsTo(TTJuron::class, 'codeJuron');
	}
}
