@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <form action="{{$post ?  route('patch-post',['post'=>$post]): 'posts-create'}}" method="post" enctype="multipart/form-data">
            @csrf
            @isset($post->id)
                {{ method_field('PATCH')}}
            @endisset
            <div class="form-group">
                <p>title</p>
                <input name="title" value="{{$post ? $post->title : 'Title here'}}">
                <br><p>category</p>
                <input name="category" value="{{$post ? $post->category : 'Category here'}}"z>
                <br> <p>post</p>
                <textarea name="post_content" cols="70" rows="10" >{{$post ? $post->post_content : 'Post text here'}}</textarea>
                <br><label calss="" >Categories:</label><br>
                @foreach($categories as $category)
                   @if(($post && $post->categories()->pluck('id')->contains($category->id)))
                        <input type="checkbox" name="categories[]" value="{{$category->id}}" checked >
                    @else <input type="checkbox" name="categories[]" value="{{$category->id}}">
                    @endif
                    <label calss="" >{{$category->name}}</label>
                    <br>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
