@extends('layouts.app')

@section('content')
    <h1>product</h1>
    <img width='400' src="{{ $product['imageUrl'] }}">
@endsection

@section('inilin_js')
    @parent
@endsection
