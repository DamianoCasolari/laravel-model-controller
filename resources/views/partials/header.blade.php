<nav class="navbar navbar-expand-sm navbar-light bg-primary position-sticky top-0 index_top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Excercise Movies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarID">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="{{ route('welcome') }}">Home</a>
                <a class="nav-link" aria-current="page" href="{{ route('about') }}">About us</a>
                <a class="nav-link" aria-current="page" href="{{ route('movies') }}">Movies</a>
            </div>
        </div>
    </div>
</nav>
