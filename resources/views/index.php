<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=1;">
    <title>Home</title>
</head>
<body>
    <h1>カフェショップ会計ログインTop</h1>
    <a href="./logIn.blade.php">ログアウト</a><br><br>
    <ul>
        <li>ログインユーサ一覧</li>
        <li>入金処理</li>
        <li>出勤処理</li>
        <li>科目マスタ一覧</li>
        <li>月次集計</li>
        <li>年次集計</li>
    </ul>
    <h2>#*<?= $url;?></h2>
    <h3>*# : {{ $url }}</h3> <!--scape data-->
    <p>*# {!! $url !!}</p><!--iunscape data-->
</body>
</html>