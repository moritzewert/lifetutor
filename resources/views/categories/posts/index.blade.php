@extends('layouts.app')

@section('content')
    <h1>{{ $category->title }}</h1>
    @foreach($posts as $post)
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
@endsection