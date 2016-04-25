@extends('test')

@section('content')

    <h1>Contact me</h1>
    
    @if (count($people))
    
    <h3>Peolple I like</h3>
    
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>

    @endif
    
@stop

@section('footer')

    <script>alert('contact form script');</script>

@stop