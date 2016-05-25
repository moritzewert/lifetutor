<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	public function posts()
	{
		return $this->hasMany('Lifetutor\Post');
	}

	public function category()
	{
		return $this->belongsTo('Lifetutor\Category');
	}

	public function courses()
	{
		return $this->hasMany('Lifetutor\Course');
	}
}
