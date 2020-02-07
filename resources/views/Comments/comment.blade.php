@foreach($post->comment as $comment)
    <div style="border: 1px solid red">
            {{($comment->user->name)}}
        <img class="[ img-circle pull-left ]" width="50px" height="50px" src="/storage/avatars/{{$comment->user->avatar}}" alt="Mouse0270" />
        <h3>{{$comment->user->name}}</h3>
        {{$comment->comm_content}}
    </div><br>
@endforeach
