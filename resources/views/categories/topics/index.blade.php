@extends('layouts.app')

@section('content')
    <h1>{{ $category->title }}</h1>
    <h2>Themen</h2>
    @foreach($topics as $topic)
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
@endsection