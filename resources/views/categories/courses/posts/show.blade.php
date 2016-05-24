@extends('layouts.app')

@section('content')
    <h1>{{ $category->title }}</h1>
    @include('content.content', ['content' => $post->content])
    <div class="well">
        <div class="list-group">
            @foreach($course->posts()->orderBy('order')->get() as $another)
                <a href="{{ route('categories.courses.posts.show', [$category, $course, $another]) }}" class="list-group-item{{ $another->id == $post->id ? ' active':'' }}">
                    #{{ $another->pivot->order }} <strong>{{ $another->title }}</strong>
                </a>
            @endforeach
        </div>
    </div>
@endsection