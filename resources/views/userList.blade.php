<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=1;">
    <title>カフェショップ会計</title>
</head>
<body>
    <h1>ユーサ一覧</h1>
    <a href="./userAdd.blade.php">ログアウト</a><br><br>
    <table border="1">
        <tr>
            <th>ユーザID</th>
            <th></th>
            <th></th>
        </tr>
        
        <tr>
            <td>12345</td>
            <!--<td><a href="">パスワード変更</a></td>-->
            <td><form action="./userList" method="post">
                パスワード<br><input name="pw"><br>
                <input type="hidden" name="id" value=""/>
                <input type="hidden" name="csrf_token" value=""/>
                <button type="submit">パスワード変更</button>
            </form></td>
            <td><a href="userList" onClick="return confirm('削除する？まじで？')">削除</a></td>
        </tr>
    </table>
</body>
</html>