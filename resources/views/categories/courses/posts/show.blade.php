@extends('layouts.app')

@section('content')
    <h1>{{ $category->title }}</h1>
    @include('content.content', ['content' => $post->content])
    <div class="well">
        <div class="list-group">
            @foreach($category->posts()->orderBy('order')->get() as $another)
                <a href="{{ route('categories.courses.posts.show', [$category, $course, $another]) }}" class="list-group-item{{ $another->id == $post->id ? ' active':'' }}">
                    {{ $another->title }}
                </a>
            @endforeach
        </div>
    </div>
@endsection