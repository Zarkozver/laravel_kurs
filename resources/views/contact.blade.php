{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Hello!</h1>
    </div>
</body>
</html> --}}

@extends('layouts.app')


@section('content')
    @if (count($people))
            <ul>
        @foreach ($people as $person)
            <li>{{$person}}</li>
        @endforeach            
            </ul>
    @endif
@endsection

@section('footer')
    
@endsection