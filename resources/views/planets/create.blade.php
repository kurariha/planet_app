<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>惑星情報登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('planets.store') }}" method="post">
        @csrf
        <p>
            <label for="name_ja">名前</label>
            <input type="text" name="name_ja" id="name_ja" value="{{ old('name_ja') }}">
        </p>
        <p>
            <label for="name_en">名前(英語)</label>
            <input type="text" name="name_en" id="name_en" value="{{ old('name_en') }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="number" name="radius" id="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="number" name="weight" id="weight" value="{{ old('weight') }}">
        </p>
        <input type="submit" value="登録">
    </form>
    <a href="{{ route('planets.index') }}">戻る</a>
</body>
</html>
