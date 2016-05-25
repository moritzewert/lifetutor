@extends('layouts.app')

@section('content')
    @include('content', ['post' => $current])
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Lektionen</div>
                    <div class="list-group">
                        @foreach($lessons as $lesson)
                            <a href="{{ route('show', [$course, 'lesson' => $lesson->pivot->order]) }}" class="list-group-item{{ $lesson->id == $current->id ? ' active':'' }}">{{ $lesson->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>{{ $course->title }}</h2>
                <p>{{ $course->description }}</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <p>related</p>
    </div>
    <hr>
    <div class="container">
        <div class="list-group">
            <div class="list-group-item">Item</div>
        </div>
    </div>
@endsection
