@extends('layouts.app')

@section('content')
        <h3 class="mt-4">Posts</h3>
        <a class="btn btn-secondary mt-4 md-4" href="/posts/create">Create Post</a>
        <br><br>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a href="/posts/{{$post->id}}"> <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}" class="btn btn-default">{{$post->title}}</a></h3>
                            <small>Written on{{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
@endsection
