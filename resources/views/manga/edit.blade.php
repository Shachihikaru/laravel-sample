@extends('layouts.app')

@section('content')
<div class="container">

    <h1>漫画編集</h1>
    <form action="/manga/update/{{$product->id}}">
        <div class="form-group">
            <label for="name">漫画名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
        </div>  
        <div class="form-group">
            <label for="num">巻数</label>
            <input type="number" class="form-control" id="num" name="num" value="{{$product->num}}" >
        </div>       
        <input class="btn btn-primary" type="submit" value='送信'>
    </form>

</div>
@endsection