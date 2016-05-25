<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $scopeTypeMap = [
		'articles' => Article::class,
		'videos' => Video::class,
		'courses' => Course::class
	];

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

	/**
	 * Scope a query to filter out posts with a given type.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeHideType($query, $type)
	{
		return $query->where('content_type', '!=', $this->scopeTypeMap[$type]);
	}
}
