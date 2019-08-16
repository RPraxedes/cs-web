<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
	
	protected $fillable = [
		'title',
		'author',
		/* 'published_date',
		'type',
		'journal',
		'volume',
		'link', */
		'status_id',
		'description',
		'user_id',
		'published_at'
	];
	
	public function status()
	{
		return $this->hasOne('App\Models\ResearchStatus', 'id', 'status_id');
	}
}
