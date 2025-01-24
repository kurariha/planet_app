<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <p><b>名前:{{ $planet->name_ja }}</b></p>
    <p><b>名前(英語):{{ $planet->name_en }}</b></p>
    <p><b>半径:{{ $planet->radius }}</b></p>
    <p><b>重量:{{ $planet->weight }}</b></p>
    <a href="{{ route('planets.index') }}">戻る</a>
</body>
</html>
