<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyStatus extends Model
{
	protected $table = 'faculty_status';
	
	public function faculty()
	{
		return $this->belongsTo('App\Models\Faculty', 'status_id', 'status_id');
	}
}
