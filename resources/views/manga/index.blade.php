@extends('layouts.app')

@section('content')
<div class="container">

    <h1>漫画管理</h1>
    <a href="/manga/create" class="btn btn-primary">新規登録</a>
    
    <div class="row">
        @foreach($products as $product)
        <div class="col-4">
            <div class="card mt-4">
                <div class="card-body">
                     <h2>{{$product->name}}</h2>
                    <p>{{$product->num}}巻</p> 
                    <a href="/manga/edit/{{$product->id}}" class="btn btn-success">編集</a>
                    <a href="/manga/delete/{{$product->id}}" class="btn btn-danger">削除</a> 
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection