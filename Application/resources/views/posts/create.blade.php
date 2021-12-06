@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3>Create Post</h3>
        {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store',  'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>

@endsection
