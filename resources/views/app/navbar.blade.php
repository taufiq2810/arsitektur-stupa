<nav class="navbar navbar-expand-lg navbar-laravel sticky-top navbar-light bg-light">
    <div class="container">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @hasSection ('nav-landing')
            @yield('nav-landing')
            @endif
        </div>

        @guest
        <a class="btn btn-primary" href="{{route('login')}}" role="button">Masuk</a>
        @else
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img style="width:30px !important; height:30px !important" src="{{asset('storage/'.Auth::user()->avatar)}}">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/user')}}">Dashboard</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        @endguest
    </div>
</nav>
