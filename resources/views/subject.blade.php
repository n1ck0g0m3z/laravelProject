<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=1;">
    <title>Home</title>
</head>
<body>
    <h1>科目一覧</h1>
    
    <h2>入金科目一覧</h2>
    <h2>入金科目追加</h2>
    <form action="" method="post">
        科目名：<input name="payment_subject"/><br>
        <input type="hidden" name="csrf_token" value=""/>
        <button type="submit">追加する</button>
    </form>
    
    <h2>出金科目一覧</h2>
    <h2>出金科目追加</h2>
    <form action="" method="post">
        科目名：<input name="withdrawal_subject"/><br>
        <input type="hidden" name="csrf_token" value=""/>
        <button type="submit">追加する</button>
    </form>
</body>
</html>