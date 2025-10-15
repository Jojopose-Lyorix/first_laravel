<?php

namespace App\Models;

use App\Models\Base\PjPassword as BasePjPassword;

class PjPassword extends BasePjPassword
{
	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'login',
		'password',
		'mail',
		'datecodes',
		'code'
	];
}
