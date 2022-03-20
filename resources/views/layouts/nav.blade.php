<nav class="navbar navbar-expand-lg navbar-light bg-white py-0">
    <div class="container px-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link fst-italic text-uppercase fw-bolder active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fst-italic text-uppercase fw-bolder" href="#">About</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fst-italic text-uppercase fw-bolder" href="#">Services</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fst-italic text-uppercase fw-bolder" href="#">Our Team</a>
                </li>
                <li class="nav-item me-4 dropdown">
                    <a class="nav-link fst-italic text-uppercase fw-bolder dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fst-italic text-uppercase fw-bolder" href="#">Blog</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fst-italic text-uppercase fw-bolder" href="#">Contact</a>
                </li>
            </ul>
            @auth
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth()->user()->name }}
                        <img src="{{ asset("storage/profile/".Auth()->user()->photo) }}" class="rounded-circle border border-white border-3" height="40" alt="">
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route("user-index") }}">Account</a></li>
                        <li><a class="dropdown-item" href="{{ route("car.create") }}">Create Sell Post</a></li>
                        <li><a class="dropdown-item" href="{{ route("blog.create") }}">Create New Blog</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth

            @guest
                <div class="">
                    <a href="{{ route("login") }}" class="btn btn-primary">Login</a>
                    <a href="{{ route("register") }}" class="btn btn-outline-primary">Register</a>
                </div>
            @endguest
        </div>
    </div>
</nav>
