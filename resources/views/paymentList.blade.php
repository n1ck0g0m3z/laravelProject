<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=1;">
    <title>カフェショップ会</title>
</head>
<body>
    <h1>入金処理</h1>
    <form action="" method="post">
        どんな理由でお金が入ったの？
        <select>
            <option>あれ</option>
            <option>それ</option>
            <option>これ</option>
        </select><br>
        いくら入ってきたの？<input name="money"/><br>
        <input type="hidden" name="csrf_token" value=""><br>
        <button type="submit">入金処理</button>
    </form>
    
    <h1>入金一覧</h1>
    <table border='1'>
        <tr>
            <th>科目</th>
            <th>金額</th>
        </tr>
        <tr>
            <td>あれ</td>
            <td>\10,000</td>
            <td><a href="./payment_list.html" onClick="return confirm('削除？？？');">削除</a></td>
        </tr>
    </table>
</body>
</html>