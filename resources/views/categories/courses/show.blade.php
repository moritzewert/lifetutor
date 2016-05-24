@extends('layouts.app')

@section('content')
    <h1>{{ $course->title }}</h1>
    <ul class="list-group">
        @foreach($course->posts as $post)
            <li class="list-group-item">
                <a href="{{ route('categories.courses.posts.show', [$category, $course, $post]) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection