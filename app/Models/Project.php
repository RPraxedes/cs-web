<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
	
	protected $fillable = [
		'title',
		'author',
		'published_date',
		'type',
		'journal',
		'volume',
		'link',
		'user_id',
		'published_at'
	];
}
