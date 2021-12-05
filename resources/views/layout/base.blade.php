<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<h1>株式会社ABC</h1>
<nav>
    <ul>
        <li><a href="/">ホーム</a></li>
        <li><a href="/products">製品リスト</a></li>
        <li><a href="/contact">お問い合わせ</a></li>
    </ul>
</nav>

<main>@yield('main')</main>

<footer>
    <p><small>&copy; ABC inc. All Rights Reserved.</small></p>
</footer>
</body>
</html>
