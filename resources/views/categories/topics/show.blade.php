@extends('layouts.app')

@section('content')
    <h1>{{ $topic->title }} <small>{{ $category->title }}</small></h1>
    <h2>Kurse <small><a href="{{ route('categories.topics.courses.index', [$category, $topic]) }}">Alle Kurse</a></small></h2>
    <div class="row">
        @foreach($topic->courses as $course)
            <div class="col-sm-3">
                <a href="{{ route('categories.topics.courses.show', [$category, $topic, $course]) }}">
                    <div class="panel panel-default" style="background-image: url({{ asset('background/'.$course->background.'.png') }});">
                        <div class="panel-body">
                            <h4>{{ $course->title }}</h4>
                            <p>{{ $course->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <h2>Beiträge <small><a href="{{ route('categories.topics.posts.index', [$category, $topic]) }}">Alle Beiräge</a></small></h2>
    <div class="row">
        @foreach($topic->posts as $post)
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
    </div>
@endsection