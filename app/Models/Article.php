<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
	protected $fillable = [
		'title',
		'body',
		'type',
		'header_image',
		'header_alt',
		'category',	
	];
	
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
