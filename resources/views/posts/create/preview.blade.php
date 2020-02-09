<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<div class="container">
    <div class="row">
        <div class="[ col-xs-12 col-sm-offset-1 col-sm-5 ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="panel-heading">
                    <a href="{{route('profile',['user'=>$post->user->id])}}"><img class="[ img-circle pull-left ]" width="50px" height="50px" src="/storage/avatars/{{$post->user->avatar}}" alt="Mouse0270" />
                    <h3>{{$post->user->name}}</h3> </a><h5><span>published</span> <span>{{$post->created_at}}</span></h5>
                    <h2>&lt;{{$post->title}}&gt;</h2>
                </div>
                <div class="panel-body">
                    <p >{{mb_substr($post->post_content, 0, 150, 'UTF-8') . '...'}}</p>
                </div>
                <div class="panel-footer">
                    <p >Views:{{$post->views}}</p>
                    <p >Comments:{{count($post->comment)}}</p>
                    <p >Categories:{{$post->categories()->pluck('name')->implode(', ')}}</p>
                    <button><a class="nav-link" href="{{route('post-page',['post'=>$post]) }}">More</a></button>
                    @if($post->user->id==\Illuminate\Support\Facades\Auth::id())
                    <button><a class="nav-link" href="{{route('post-change',['post'=>$post]) }}">Change</a></button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
