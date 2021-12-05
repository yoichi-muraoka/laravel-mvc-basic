@extends('layout.base')

@section('title', 'お問い合わせ')

@section('main')
<form action="" method="post">
    @csrf
    <table>
        <tr>
            <th>お名前</th>
            <td>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="text" name="name" value="{{ old('name') }}">
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="text" name="email" value="{{ old('email') }}">
            </td>
        </tr>
        <tr>
            <th>内容</th>
            <td>
                @error('msg')
                    <p class="error">{{ $message }}</p>
                @enderror
                <textarea name="msg" cols="30" rows="10">{{ old('msg') }}</textarea>
            </td>
        </tr>
        <tr>
            <th colspan="2"><input type="submit"></th>
        </tr>
    </table>
</form>
@endsection
