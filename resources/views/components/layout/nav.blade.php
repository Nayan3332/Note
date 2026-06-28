<nav class="navbar">
    <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ asset('image/nav/logo.svg') }}" alt="Note App logo" class="navbar-logo">
    </a>

    <ul class="navbar-nav">
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ url('/notes') }}" class="nav-link">Notes</a></li>
        <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
    </ul>
    @auth
    <div class="navbar-actions">
        <span class="navbar-user">Welcome,{{ auth()->user()->name}}</span>
        <form action="{{ url('/logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="btn btn-outline-primary">Logout</button>
        </form>
    </div>
    @endauth
    @guest
    <div class="navbar-actions">
        <a href="{{ url('/login') }}" class="btn btn-outline-primary">Login</a>
        <a href="{{ url('/register') }}" class="btn btn-primary">Register</a>
    </div>
    @endguest
</nav>
