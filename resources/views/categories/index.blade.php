@extends('layouts.app')

@section('content')
    @foreach($categories as $category)
        <div class="panel panel-default">
            <div class="panel-heading">{{ $category->title }}</div>
            <div class="panel-body">
                @foreach($category->posts()->limit(4) as $post)
                    <div class="col-sm-4">
                        {{ $post->title }}
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection