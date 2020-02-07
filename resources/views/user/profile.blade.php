@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 >Profile</h4></div>
                <div class="panel-body">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img alt="User Pic" src="/storage/avatars/{{ $user->avatar }}" id="profile-image1" class="img-circle img-responsive">
                        <div class="row justify-content-center">
                            <form action="/profile" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                        <div class="container" >
                            <h2>{{$user->name}}</h2>
                        </div>
                        <hr>
                        <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$user->email}}</p></li>
                        </ul>
                        <hr>
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        @foreach($posts as $post)
                            @include('posts.create.preview')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
