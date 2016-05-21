<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function topic()
    {
	    return $this->belongsTo('Lifetutor\Topic');
    }

	public function posts()
	{
		return $this->belongsToMany('Lifetutor\Post');
	}
}
