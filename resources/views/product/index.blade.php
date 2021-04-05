@extends('layouts.app')

@section('content')
<div class="container">

    <h1>商品管理</h1>
    <a href="/product/create" class="btn btn-success">新規登録</a>
    
    <div class="row">
        @foreach($products as $product)
        <div class="col-4">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>{{$product->name}}</h2>
                    <p>{{$product->price}}円</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection