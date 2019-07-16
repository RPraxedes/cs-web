<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
	protected $table = 'checklists';
	
    protected $fillable = [
		'title', 'body',
	];
	
	public function course()
	{
		return $this->belongsTo('App\Models\Course', 'title');
	}
}
