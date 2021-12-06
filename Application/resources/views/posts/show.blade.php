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
        <small>Written on {{$post->created_at}}</small>
        <a href="/posts/{{$post->id}} class="></a>
    </div>
@endsection
