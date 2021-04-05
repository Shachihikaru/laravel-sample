@extends('layouts.app')

@section('content')
<div class="container">

    <h1>消費税計算ページ</h1>
    <form action="/tax/calc">
        <div class="form-group">
            <label for="tax">代金</label>
            <input type="text" class="form-control" id="tax" name="tax">
        </div>


        
        <input class="btn btn-primary" type="submit" value='計算'>

    </form>
</div>
@endsection