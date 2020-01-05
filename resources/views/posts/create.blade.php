@extends('layouts.app')


@section('content')
    <h1>Create Post</h1>
        {!!Form::open(['method'=>'post','action'=>'PostsController@store','files'=>true])!!}
            <div class="form-group">
                {!! Form::label('title-label', 'Unesite naslov:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                {!! Form::label('title-label', 'Unesite opis:') !!}
                {!! Form::text('body', null, ['class'=> 'form-control']) !!}
                <br>
                {!! Form::file('file', ['class'=>'form-control']) !!}
            </div>
            <br>
            <div class="form-group">
                {!! Form::submit('Make a post', ['class'=>'btn btn-primary']) !!}
            </div>
        {!!Form::close()!!}
        
        @if (count($errors))
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
@endsection

@section('footer')
    
@endsection

