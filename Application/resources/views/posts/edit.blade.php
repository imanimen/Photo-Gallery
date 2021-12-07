@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3>Edit Post</h3>
        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id],  'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <br>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>

@endsection
