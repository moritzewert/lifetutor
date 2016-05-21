@extends('layouts.app')

@section('content')
    @foreach($categories as $category)
        <div class="col-sm-3">
            <a href="{{ route('categories.show', $category) }}">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>{{ $category->title }}</h4>
                        <p>{{ $category->description }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endsection