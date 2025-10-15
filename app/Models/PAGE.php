<?php

namespace App\Models;

use App\Models\Base\PAGE as BasePAGE;

class PAGE extends BasePAGE
{
	protected $fillable = [
		'Description',
		'NomPage'
	];
}
