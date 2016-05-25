@extends('layouts.app')

@section('content')
    @include('content', ['post' => $post])
    @include('related', ['post' => $post])
    @include('comments', ['post' => $post])
@endsection