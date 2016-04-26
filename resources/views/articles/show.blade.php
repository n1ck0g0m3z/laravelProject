@extends('test')

@section('content')

    <h1>{{$article->title}}</h1>
    
    <hr/>
    
    <article>
        
        <div clas="body">{{$article->body}}</div>
        
    </article>

@stop