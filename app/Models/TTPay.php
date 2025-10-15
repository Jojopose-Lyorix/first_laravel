<?php

namespace App\Models;

use App\Models\Base\TTPay as BaseTTPay;

class TTPay extends BaseTTPay
{
	protected $fillable = [
		'nom'
	];
}
