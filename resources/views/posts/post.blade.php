@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="[ col-xs-12 col-sm-offset-1 col-sm-5 ]">
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <img class="[ img-circle pull-left ]" width="50px" height="50px" src="/storage/avatars/{{$post->user->avatar}}" alt="Mouse0270" />
                        <a href="{{route('profile',['user'=>$post->user->id])}}"><h3>{{$post->user->name}}</h3></a> <h5><span>published</span> <span>{{$post->created_at}}</span></h5>
                        <h2>&lt;{{$post->title}}&gt;</h2>
                    </div>
                    <div class="panel-body">
                        <p>{{$post->post_content}}</p>
                    </div>
                    <div class="panel-footer">
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <textarea name="comment" style="width: 80%"></textarea>
                            <button type="submit">Comment</button>
                        </form>
                    </div>
                </div>
                <div >
                        @include('Comments.comment')
                </div>
            </div>

        </div>
    </div>
@endsection
