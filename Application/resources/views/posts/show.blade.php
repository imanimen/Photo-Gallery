@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="container">
        <div class="mt-4">
            <h1>{{$post->title}}</h1>
        </div>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <div>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        </div>
        <br>
        {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    </div>
@endsection
