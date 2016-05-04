<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
	    return $this->belongsTo('Lifetutor\User');
    }

	public function category()
	{
		return $this->belongsTo('Lifetutor\Category');
	}
}
