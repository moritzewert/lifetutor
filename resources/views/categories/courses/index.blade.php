@extends('layouts.app')

@section('content')
    <h1>{{ $category->title }}</h1>
    @foreach($courses as $course)
        <div class="col-sm-3">
            <a href="{{ route('categories.courses.show', [$category, $course]) }}">
                <div class="panel panel-default" style="background-image: url({{ asset('background/'.$course->background.'.png') }});">
                    <div class="panel-body">
                        <h4>{{ $course->title }}</h4>
                        <p>{{ $course->description }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endsection