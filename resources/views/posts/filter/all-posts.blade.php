@extends('layouts.app')

@section('content')
@foreach($posts as $post)
    @include('posts.create.post')
@endforeach
@endsection
