@extends('layouts.app')

@section('content')
    <div class="well mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                        <div>
                            <a class="btn btn-primary" href="/posts/create">Create Post</a>
                            <h3>Your Blog Posts</h3>
                            @if(count($posts) > 0)
                                    <table class="table table-striped">
                                            <tr>
                                                <th>Title</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            @foreach($posts as $post)
                                            <tr>
                                                <td><a href="/posts/{{$post->id}}" class="btn btn-default">{{$post->title}}</a></td>
                                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                                <td>
                                                    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
                                                        {{Form::hidden('_method', 'DELETE')}}
                                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
                            @else
                                <p>You have no posts!</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
