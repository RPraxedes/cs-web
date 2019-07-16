<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
	
	public function checklist()
	{
		return $this->hasMany('App\Models\Checklist', 'title');
	}
}
