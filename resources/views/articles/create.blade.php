@extends('test')

@section('content')

    <h1>Write an Article</h1>
    
    <hr>
    
    {!! Form::open( ['url' => 'articles'] ) !!}
    
        @include ('articles._form',['submitButton'=>'Add Article'])
        
    {!! Form::close() !!}
    
    @include ('errors.list')
    
@stop
