@extends('layouts.app')

@section('content')
<div class="container">

    <h1>掲示板</h1>
    <form action="/post/store">
        <div class="form-group">
            <label for="post">書き込み</label>
            <textarea class="form-control" id="post" name="post" rows="3"></textarea>
        </div>        
        <input class="btn btn-primary" type="submit" value='送信'>
    </form>

    @foreach($posts as $post)
    <div class="card mt-4">
        <div class="card-body">
            {{$post->content}}
            <a href="/post/edit/{{$post->id}}" class="btn btn-success">編集</a>
            <a href="/post/delete/{{$post->id}}" class="btn btn-danger">削除</a>
        </div>
    </div>
    @endforeach
</div>
@endsection