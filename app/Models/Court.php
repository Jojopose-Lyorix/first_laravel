<?php

namespace App\Models;

use App\Models\Base\Court as BaseCourt;

class Court extends BaseCourt
{
	protected $fillable = [
		'NumeroCourt',
		'TypeCourt'
	];
}
