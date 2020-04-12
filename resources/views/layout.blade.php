<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
 
  @yield('content')
    <ul>
        <li><a href="/about">アバウト</a>をみる</li>
        <li>コンタクトは<a href="/contact">こちら</a></li>
        <li><a href="/">ホーム</a>
        <li><a href="/table">テーブル</a>を見る</li>
    </ul>
</body>
</html>