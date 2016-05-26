<div class="container">
    <div class="col-sm-6 col-sm-offset-3">
        @if(Auth::guest())
            <p class="text-center">Logge dich ein um einen Kommentar zu schreiben</p>
            <a class="btn btn-primary btn-block">Anmelden</a>
        @else
            <form>
                <div class="media">
                    <div class="media-left col-sm-2">
                        <a href="#">
                            <img class="media-object" src="http://www.stamm-orion.com/Index/Bilder/wolfskopf.gif" width="100%" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <input type="text" class="form-control input-sm" id="titleInput" placeholder="Titel">
                        </h4>
                        <textarea class="form-control input-sm" id="kommentarInput" placeholder="Kommentar"></textarea>
                        <button type="submit" class="btn btn-default btn-sm btn-block">Submit</button>
                    </div>
                </div>
            </form>
        @endif
        <hr>
        @if($post->comments->count())
            @foreach($post->comments as $comment)
                <div class="media">
                    <div class="media-left col-sm-2">
                        <a href="#">
                            <img class="media-object img-circle" src="http://www.stamm-orion.com/Index/Bilder/wolfskopf.gif" alt="...">
                            <p>{{ $comment->author->name }}</p>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->title }} <small>{{ $comment->created_at->diffForHumans() }}</small></h4>
                        {{ $comment->text }}
                    </div>
                </div>
            @endforeach
        @else
            <p class="lead text-center"><i class="fa fa-comments"></i> Sei der erste der einen Kommentar hinterlässt</p>
        @endif
    </div>
</div>