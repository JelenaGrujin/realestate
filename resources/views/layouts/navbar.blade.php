<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Real estate') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="{{ Request::path()==='home'?'nav-link active':'nav-link'}}" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::path()==='realestates'?'nav-link active':'nav-link'}}" href="realestates">Real estates</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::path()==='owners'?'nav-link active':'nav-link'}}" href="owners">Owners</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::path()==='ObjectType'?'nav-link active':'nav-link'}}" href="ObjectType">Base</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link">Loged in: @auth {{Auth::user()->name}} @endauth </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{Auth::logout()}}">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
