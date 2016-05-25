@extends('layouts.app')

@section('content')
    @include('content', ['post' => $post])

    <div class="well">
        Comments etc.
    </div>
@endsection
