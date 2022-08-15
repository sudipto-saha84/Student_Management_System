<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand h1">LoGo</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#my-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="my-menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item "><a href="" class="nav-link text-light">Home</a></li>
                <li class="nav-item "><a href="" class="nav-link text-light">About</a></li>
                <li class="nav-item "><a href="" class="nav-link text-light">Contact</a></li>
                @if(!Auth::check())
                    <li class="nav-item "><a href="{{ route('login') }}" class="nav-link text-light">Login</a></li>
                    <li class="nav-item "><a href="{{ route('register') }}" class="nav-link text-light">Register</a></li>
                @else
                    <li class="nav-item "><a href="" class="nav-link text-light" onclick="event.preventDefault(); document.getElementById('logOut').submit()">Log-out</a></li>
                    <form action="{{ route('logout') }}" method="post" id="logOut">
                        @csrf
                    </form>
                @endif
            </ul>
        </div>
    </div>
</nav>
