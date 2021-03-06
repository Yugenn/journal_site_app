<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article index</title>
</head>

<body>
    <h1>論文一覧</h1>
    @foreach ($articles as $article)
        <!-- // リンク先をidで取得し名前で出力 -->
        <p>
            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
        </p>
    @endforeach

    <!-- 新規登録画面へジャンプする -->
    <a href="/articles/create"><input type="submit" value="新規論文投稿"></a>
</body>

</html>
