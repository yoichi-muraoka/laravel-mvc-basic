@extends('layout.base')

@section('title', 'プロダクトリスト')

@section('main')
    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>詳細</th>
        </tr>
        @foreach ($products as $id => $product)
        <tr>
            <td>{{ $id }}</td>
            <td>{{ $product['name'] }}</td>
            <td><a href="/products/{{ $id }}">詳細</a></td>
        </tr>
        @endforeach
    </table>
@endsection
