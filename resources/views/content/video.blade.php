<div class="post-header">
    <div class="container">
        <div class="video-container">
            @if(get_class($post->content->video) == Lifetutor\Youtube::class)
                @include('content.video.youtube', ['post' => $post])
            @elseif(get_class($post->content->video) == Lifetutor\Vimeo::class)
                @include('content.video.vimeo', ['post' => $post])
            @endif
        </div>
    </div>
</div>
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p class="lead">{{ $post->description }}</p>
</div>