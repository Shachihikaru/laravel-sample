@extends('layouts.app')

@section('content')
<div class="container">


    <h1>編集</h1>
    <form action="/post/update/{{$post->id}}">
        <div class="form-group">
            <label for="post">上書き</label>
            <textarea class="form-control" id="post" name="post" rows="3" value="{{$post->content}}"></textarea>
        </div>        
        <input class="btn btn-primary" type="submit" value='送信'>
    </form>

</div>
@endsection