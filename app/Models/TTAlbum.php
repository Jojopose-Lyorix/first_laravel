<?php

namespace App\Models;

use App\Models\Base\TTAlbum as BaseTTAlbum;

class TTAlbum extends BaseTTAlbum
{
	protected $fillable = [
		'titre',
		'anneeParution'
	];
}
