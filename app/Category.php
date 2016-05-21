<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function topics()
    {
	    return $this->hasMany('Lifetutor\Topic');
    }

	public function courses()
	{
		return $this->hasManyThrough('Lifetutor\Course', 'Lifetutor\Topic');
	}

	public function posts()
	{
		return $this->hasManyThrough('Lifetutor\Post', 'Lifetutor\Topic');
	}
}
