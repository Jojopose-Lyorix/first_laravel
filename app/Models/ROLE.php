<?php

namespace App\Models;

use App\Models\Base\ROLE as BaseROLE;

class ROLE extends BaseROLE
{
	protected $fillable = [
		'NomRole',
		'Description'
	];
}
