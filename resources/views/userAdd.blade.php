<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=1;">
    <title>カフェショップ会</title>
</head>
<body>
    <h1>ユーザ追加</h1>
    <form action="./userList" method="post">
        ユーザID<input name="id"/><br>
        メモ<input name="memo"/><br>
        <input type="hidden" name="csrf_token" value=""><br>
        <button type="submit">ユーザ新規登録</button>
    </form>
</body>
</html>