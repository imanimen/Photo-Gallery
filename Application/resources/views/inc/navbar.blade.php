<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <a class="navbar-brand mx-4" href="/">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
            </li>
            <li class="nav-item navbar-nav navbar-right">
                <a class="nav-link" href="/posts/create">Create Post</a>
            </li>
        </ul>

{{--        <form class="form-inline mt-2 mt-md-0">--}}
{{--            <input class="form-control mr-sm-12 p-2 ml-7" type="text" placeholder="Search" aria-label="Search">--}}
{{--        </form>--}}
    </div>
</nav>
