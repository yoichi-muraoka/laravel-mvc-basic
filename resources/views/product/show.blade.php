@extends('layout.base')

@section('title', 'プロダクト | ' . $product['name'])

@section('main')
<h2>{{ $product['name'] }}</h2>
<p>価格: {{ $product['price'] }}</p>
<p>製造日: {{ $product['madeAt'] }}</p>
<p><a href="/products">戻る</a></p>
@endsection
