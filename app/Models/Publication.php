<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
  protected $table = 'publications';

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

  public function faculty()
  {
      return $this->belongsTo('App\Models\Faculty', 'user_id', 'user_id');
  }
}
