<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
	    return $this->belongsTo('Lifetutor\User');
    }

	public function topic()
	{
		return $this->belongsTo('Lifetutor\Topic');
	}
	
	public function course()
	{
		return $this->belongsToMany('Lifetutor\Course')->withPivot('order')->withTimestamps();
	}

	public function content()
	{
		return $this->morphTo();
	}
}
