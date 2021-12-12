@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3>Create Post</h3>
        {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store',  'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <br>
        <div class="form-group ">
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>

@endsection
