@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <h1><small>Universität</small> Bewerben</h1>
    </div>
    <div class="col-sm-8">
        <div class="well well-sm">
            Filter
        </div>

        @include('components.tiles', ['items' => $posts])
    </div>
    <div class="col-sm-4"><p>Sidebar</p></div>
@endsection