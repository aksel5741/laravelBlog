@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <form action="posts-create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <p>title</p>
                <input name="title">
                <br><p>category</p>
                <input name="category">
                <br> <p>post</p>
                <textarea name="post_content" cols="70" rows="10"></textarea>
                <br><label calss="" >Categories:</label><br>
                @foreach($categories as $category)
                    <input type="checkbox" name="categories[]" value="{{$category->id}}">
                    <label calss="" >{{$category->name}}</label>
                    <br>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
