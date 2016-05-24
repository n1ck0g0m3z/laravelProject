@extends('test')

@section('content')
    <h1>カフェショップ会計TopPage</h1>
    <h3>Hello : {{ $first }} {{ $last }}</h3>
    <form action="" method="">
        ID:<input type="text" name="id"/>
        password:<input type="password" name="pw"/>
        <br><br>
        <button type="submit">ログイン</button>
    </form>
@stop