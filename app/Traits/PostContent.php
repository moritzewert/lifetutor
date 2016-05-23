<?php


namespace Lifetutor\Traits;


trait PostContent {
	
	public function post()
	{
		return $this->morphOne('Lifetutor\Post', 'content');
	}
}