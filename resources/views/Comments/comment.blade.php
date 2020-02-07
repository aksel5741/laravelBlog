@foreach($post->comment as $comment)
    <div>
        {{$comment->comm_content}}

    </div><br>
@endforeach
