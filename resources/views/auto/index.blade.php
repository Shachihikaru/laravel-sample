@extends('layouts.app')

@section('content')
<div class="container">

    <h1>足し算計算ページ</h1>
    <form action="/auto/calc">
        <div class="form-group">
            <label for="auto">数値１</label>
            <input type="text" class="form-control" id="auto" name="auto">
        </div>
        <div class="form-group">
            <label for="num">数値２</label>
            <input type="text" class="form-control" id="num" name="num">

        </div>


        
        <input class="btn btn-primary" type="submit" value='計算'>

    </form>
</div>
@endsection