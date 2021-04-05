@extends('layouts.app')

@section('content')
    <h1>結果</h1>
    {{$bmi}}
    <a href="/bmi">再計算</a>
@endsection