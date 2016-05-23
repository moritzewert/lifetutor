<?php

namespace Lifetutor;

use Illuminate\Database\Eloquent\Model;
use Lifetutor\Traits\PostContent;
use Lifetutor\Traits\VideoContent;

class Vimeo extends Model
{
	use VideoContent;

	protected $table = 'vimeo';
}
