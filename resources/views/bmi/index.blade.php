@extends('layouts.app')

@section('content')
<div class="container">

    <h1>計算ページ</h1>
    <form action="/bmi/calc">
        <div class="form-group">
            <label for="height">身長</label>
            <input type="text" class="form-control" id="height" name="height">
        </div>
        <div class="form-group">
            <label for="weight">体重</label>
            <input type="text" class="form-control" id="weight" name="weight">

        </div>

        
        <input class="btn btn-primary" type="submit" value='計算'>

    </form>
</div>
@endsection