@extends('layouts.app')

@section('content')
    <h1>{{ $category->title }}</h1>
    <h2>Themen <small><a href="{{ route('categories.topics.index', $category) }}">Alle Themen</a></small></h2>
    <div class="row">
        @foreach($category->topics as $topic)
            <div class="col-sm-3">
                <a href="{{ route('categories.topics.show', [$category, $topic]) }}">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>{{ $topic->title }}</h4>
                            <p>{{ $topic->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <h2>Kurse <small><a href="{{ route('categories.courses.index', $category) }}">Alle Kurse</a></small></h2>
    <div class="row">
        @foreach($category->courses as $course)
            <div class="col-sm-3">
                <a href="{{ route('categories.courses.show', [$category, $course]) }}">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>{{ $course->title }}</h4>
                            <p>{{ $course->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <h2>Beiträge <small><a href="{{ route('categories.posts.index', $category) }}">Alle Beiträge</a></small></h2>
    <div class="row">
        @foreach($category->posts as $post)
            <div class="col-sm-3">
                <a href="{{ route('categories.posts.show', [$category, $post]) }}">
                    <div class="panel panel-default">
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