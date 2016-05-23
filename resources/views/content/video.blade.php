@if(get_class($content) == Lifetutor\Youtube::class)
    @include('content.video.youtube', ['content' => $content])
@elseif(get_class($content) == Lifetutor\Vimeo::class)
    @include('content.video.vimeo', ['content' => $content])
@endif