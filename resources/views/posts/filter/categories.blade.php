@extends('layouts.app')

@section('content')
<div class="form-group">
    <form action="filtered-posts">
        <br><label calss="" >Categories:</label><br>
        @foreach($categories as $category)
            <input type="radi" name="categories" value="{{$category->id}}">
            <label calss="" >{{$category->name}}</label>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@if(!empty($posts))
@foreach($posts as $post)
    @include('posts.create.preview')
@endforeach
@endif
@endsection
