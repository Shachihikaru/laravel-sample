@extends('layouts.app')

@section('content')
<div class="container">

    <h1>商品管理</h1>
    <form action="/product/update/{{$product->id}}">
        <div class="form-group">
            <label for="name">商品名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
        </div>  
        <div class="form-group">
            <label for="price">値段</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" >
        </div>       
        <input class="btn btn-primary" type="submit" value='送信'>
    </form>

</div>
@endsection