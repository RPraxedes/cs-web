<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $table = 'conferences';
	
	protected $fillable = [
		'paper_title',
		'author',
		'conference_date',
		'type',
		'venue',
		'conference_title',
		'link',
		'published_at',
	];
}
