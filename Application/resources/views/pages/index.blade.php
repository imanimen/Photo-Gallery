@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center align-baseline mt-4 ">
        <h1>Welcome To Laravel!</h1>
        <p>This is a test laravel application </p>
        <p>

                <a href="/login" class="btn btn-primary btn-ld" role="button">Login</a>
                <a href="/register" role="button" class="btn btn-primary btn-ld" >Register</a>
        <form method="POST" action="{{ url('/logout') }}">
            @csrf
            <button type="submit" class="btn btn-success btn-ld" >Logout</button>
            <a href="/dashboard" class="btn btn-success btn-ld" role="button">dashboard</a>

        </form>
        </p>
    </div>
@endsection
