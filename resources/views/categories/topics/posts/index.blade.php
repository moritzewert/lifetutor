@extends('layouts.app')

@section('content')
    <h1>{{ $topic->title }} <small>{{ $category->title }}</small></h1>
    @foreach($posts as $post)
        <div class="col-sm-3">
            <a href="{{ route('categories.topics.posts.show', [$category, $topic, $post]) }}">
                <div class="panel panel-default" style="background-image: url({{ asset('background/'.$post->background.'.png') }});">
                    <div class="panel-body">
                        <h4>{{ $post->title }}</h4>
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endsection