<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchStatus extends Model
{
    protected $table = 'research_project_status';
	
	public function project()
	{
		return $this->belongsTo('App\Models\Project', 'id', 'status_id');
	}
}
