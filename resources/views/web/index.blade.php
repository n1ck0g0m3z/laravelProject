@extends('test')

@section('content')
    <h1>カフェショップ会計ログインTop</h1>
    <a href="/log">ログアウト</a><br><br>
    <ul>
        <li><a href="/userlist">ログインユーサ一覧</a></li>
        <li><a href="/money">入金処理</a></li>
        <li><a href="/withdrawal">出勤処理</a></li>
        <li><a href="/subject">科目マスタ一覧</a></li>
        <li><a href="/monthly">月次集計</a></li>
        <li><a href="">年次集計</a></li>
    </ul>
    <h2>#*<?= $url;?></h2>
    <h3>*# : {{ $url }}</h3> <!--scape data-->
    <p>*# {!! $url !!}</p><!--iunscape data-->
@stop
