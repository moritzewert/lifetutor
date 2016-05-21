@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    @include('content.content', ['content' => $post->content])
@endsection