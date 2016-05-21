@foreach($items as $item)
    @can('view', $item)
        @if($item instanceof Category)
            @include('components.tiles.category', ['item' => $item])
        @elseif($item instanceof Post)
            @include('components.tiles.post', ['item' => $item])
        @elseif($item instanceof Topic)
            @include('components.tiles.topic', ['item' => $item])
        @elseif($item instanceof User)
            @include('components.tiles.user', ['item' => $item])
        @endif
    @endcan
@endforeach