@extends('layouts.app')

@section('content')
    <h1>{{ $topic->title }} <small>{{ $category->title }}</small></h1>
    @foreach($courses as $course)
        <div class="col-sm-3">
            <a href="{{ route('categories.topics.courses.show', [$category, $topic, $course]) }}">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>{{ $course->title }}</h4>
                        <p>{{ $course->description }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endsection