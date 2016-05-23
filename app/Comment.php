<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function author()
    {
	    return $this->belongsTo('Lifetutor\User');
    }

	public function post()
	{
		return $this->belongsTo('Lifetutor\Post');
	}
}
