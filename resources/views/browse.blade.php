@extends('layouts.app')

@section('content')
    <div class="container container-guttered">
        <div class="col-sm-3">
            <div class="panel panel-default">
                @if(get_class($context) == Lifetutor\Category::class)
                    <div class="list-group">
                        <a href="{{ route('browse', $filterActions['current']) }}" class="list-group-item">Alle Kategorien</a>
                        <a class="list-group-item active">{{ $context->title }}</a>
                    </div>
                    <div class="panel-heading">Themen</div>
                    <div class="list-group">
                        @foreach($context->topics as $topic)
                            <a href="{{ route('browse', array_merge(['topic' => $topic], $filterActions['current'])) }}" class="list-group-item">{{ $topic->title }}</a>
                        @endforeach
                    </div>
                @elseif(get_class($context) == Lifetutor\Topic::class)
                    <div class="list-group">
                        <a href="{{ route('browse', $filterActions['current']) }}" class="list-group-item">Alle Kategorien</a>
                        <a href="{{ route('browse', array_merge(['category' => $context->category], $filterActions['current'])) }}" class="list-group-item">{{ $context->category->title }}</a>
                        <a class="list-group-item active">{{ $context->title }}</a>
                    </div>
                @else
                    <div class="panel-heading">Kategorien</div>
                    <div class="list-group">
                        @foreach($categories as $category)
                            <a href="{{ route('browse', array_merge(['category' => $category], $filterActions['current'])) }}" class="list-group-item">{{ $category->title }}</a>
                        @endforeach
                    </div>
                @endif
                <div class="panel-heading">Inhalt</div>
                <div class="list-group">
                    <a href="{{ route('browse', $filterActions['articles']) }}" class="list-group-item">{!! in_array('articles', $hide) ? '<i class="fa fa-times"></i>':'<i class="fa fa-check"></i>' !!} Artikel</a>
                    <a href="{{ route('browse', $filterActions['videos']) }}" class="list-group-item">{!! in_array('videos', $hide) ? '<i class="fa fa-times"></i>':'<i class="fa fa-check"></i>' !!} Videos</a>
                    <a href="{{ route('browse', $filterActions['courses']) }}" class="list-group-item">{!! in_array('courses', $hide) ? '<i class="fa fa-times"></i>':'<i class="fa fa-check"></i>' !!} Kurse</a>
                </div>
            </div>
        </div>
        <div class="content-list col-sm-9">
            @foreach($result as $item)
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-image"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt={{ $item->title }}&w=350&h=150"></div>
                        <div class="panel-footer">{{ $item->title }}</div>
                        <div class="panel-footer"><a href="{{ route('show', $item) }}">Lesen ></a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
