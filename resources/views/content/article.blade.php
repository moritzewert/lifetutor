<div class="post-header" style="background-image: url(http://wallpapercave.com/wp/qFvVHqa.jpg);">
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->description }}</p>
    </div>
</div>
<div class="container">
    {!! Markdown::convertToHtml($post->content->text) !!}
</div>