@extends('layouts.app')

@section('content')
@foreach($posts as $post)
    @include('posts.create.preview')
@endforeach
    {{$posts->links()}}
@endsection
