<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\TTDerouler;
use App\Models\TTParticiper;
use App\Models\TTPrononcer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTAlbum
 * 
 * @property string $codeAlbum
 * @property string|null $titre
 * @property string|null $anneeParution
 * 
 * @property Collection|TTDerouler[] $t_t_deroulers
 * @property Collection|TTParticiper[] $t_t_participers
 * @property Collection|TTPrononcer[] $t_t_prononcers
 *
 * @package App\Models\Base
 */
class TTAlbum extends Model
{
	protected $table = 'TT_album';
	protected $primaryKey = 'codeAlbum';
	public $incrementing = false;
	public $timestamps = false;

	public function t_t_deroulers()
	{
		return $this->hasMany(TTDerouler::class, 'codeAlbum');
	}

	public function t_t_participers()
	{
		return $this->hasMany(TTParticiper::class, 'codeAlbum');
	}

	public function t_t_prononcers()
	{
		return $this->hasMany(TTPrononcer::class, 'codeAlbum');
	}
}
