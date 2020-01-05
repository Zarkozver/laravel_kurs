@extends('layouts.app')


@section('content')
    <h1>Edit Post</h1>
    {{-- <form action="/posts/{{$post->id}}" method="POST">    
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="body" value="{{$post->body}}">
        <input type="submit" name="Update">
    </form>
    <form action="/posts/{{$post->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete">
    </form> --}}

    {!! Form::model($post, ['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title-label', 'Unesite naslov:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <br>
        <div class="form-group">
            {!! Form::label('body-label', 'Unesite opis') !!}
            {!! Form::text('body', null, ['class'=>'form-control']) !!}
            {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
        </div>
        <br>
    {!! Form::close() !!}

    {!! Form::model($post,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

    
@endsection

@section('footer')
    
@endsection