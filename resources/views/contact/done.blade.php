@extends('layout.base')

@section('title', 'お問い合わせ完了')

@section('main')
<p>以下の内容で受け付けました。</p>
<table>
    <tr>
        <th>名前</th>
        <td>{{ $input['name'] }}</td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>{{ $input['email'] }}</td>
    </tr>
    <tr>
        <th>名前</th>
        <td><pre>{{ $input['msg'] }}</pre></td>
    </tr>
</table>
@endsection
