<?php


namespace Lifetutor\Traits;


trait VideoContent {
	
	public function content()
	{
		return $this->morphOne('Lifetutor\Video', 'video');
	}
}