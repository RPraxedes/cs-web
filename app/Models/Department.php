<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	public function faculty()
	{
		return $this->hasMany('App\Models\Faculty', 'dept_id');
	}
}
