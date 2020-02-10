@foreach($post->comment as $comment)
    <div style="border: 1px solid red">
        <a href="{{$comment->user==null ? '': route('profile',['user'=>$post->user->id])}}"><img class="[ img-circle pull-left ]" width="50px" height="50px" src="/storage/avatars/{{$comment->user==null ? 'user.png' : $comment->user->avatar}}" alt="Mouse0270" />
        <h3>{{$comment->user==null ? 'Guest' : $comment->user->name}}</h3></a>
        {{$comment->comm_content}}
    </div><br>
@endforeach
