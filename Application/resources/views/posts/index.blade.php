@extends('layouts.app')

@section('content')
        <h3>Posts</h3>
        <a class="nav navbar-nav btn-default mt-4 md-4" href="/posts/create">Create Post</a>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on{{$post->created_at}}</small>
                    <hr>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
@endsection
