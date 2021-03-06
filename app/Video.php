<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;
use Lifetutor\Traits\PostContent;

class Video extends Model
{
	use PostContent;

	public function video()
	{
		return $this->morphTo();
	}
}
