<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>株式会社ABCより</title>
    <style>
        table {
            border: 2px solid #000;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 5px 10px;
        }

        pre {
            font-size: 18px;
        }
    </style>
</head>
<body>
<h1>株式会社ABC</h1>
<p>以下の内容で承りました。</p>
<table>
    <tr>
        <th>お名前</th>
        <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>{{ $data['email'] }}</td>
    </tr>
    <tr>
        <th>内容</th>
        <td><pre>{{ $data['msg'] }}</pre></td>
    </tr>
</table>
</body>
</html>
