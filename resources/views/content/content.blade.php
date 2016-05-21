@if(get_class($content) == Lifetutor\Article::class)
    @include('content.article', ['content' => $content])
@elseif(get_class($content) == Lifetutor\Video::class)
    @include('content.video', ['content' => $content->video])
@endif