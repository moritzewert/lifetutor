@if(get_class($post->content) == Lifetutor\Article::class)
    @include('content.article', ['post' => $post])
@elseif(get_class($post->content) == Lifetutor\Video::class)
    @include('content.video', ['post' => $post])
@elseif(get_class($post->content) == Lifetutor\Course::class)
    @include('content.course', ['post' => $post])
@endif