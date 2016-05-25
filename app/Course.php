<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;
use Lifetutor\Traits\PostContent;

class Course extends Model
{
	use PostContent;
	
	public function posts()
	{
		return $this->belongsToMany('Lifetutor\Post')->withPivot('order')->withTimestamps();
	}
}
