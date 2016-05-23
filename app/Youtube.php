<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;
use Lifetutor\Traits\PostContent;
use Lifetutor\Traits\VideoContent;

class Youtube extends Model
{
	use VideoContent;

	protected $table = 'youtube';
}
