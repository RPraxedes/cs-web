<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherAchievement extends Model
{
    protected $table = 'otherachievements';
	
	protected $fillable = [
		'content',
		'user_id',
		'published_at',
		'updated_at'
	];
}
