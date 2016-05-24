@extends('test')

@section('content')
    <h1>月次集計</h1>
    
    <a href="">＜＜前の月を見る</a>
    <a href="">次の月を見る＞＞</a>
    <table border="1">
        <tr>
            <th>日付</th>
            <th>入金合計</th>
            <th>出金合計</th>
            <th>差分</th>
        </tr>
        <tr>
            <td>2016/01/01</td>
            <th>30.000</th>
            <th>10.000</th>
            <th>20.000</th>
        </tr>
        <tr>
            <td>2016/01/02</td>
            <th>30.000</th>
            <th>10.000</th>
            <th>-10.000</th>
        </tr>
        <tr>
            <td>合計</td>
            <th>60.000</th>
            <th>20.000</th>
            <th>10.000</th>
        </tr>
    </table>
@stop