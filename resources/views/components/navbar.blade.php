<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-light shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets/logo.png')}}" alt="Logo" width="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('articleByCategory', ['category' => 'Data Science'])}}">Data Science</a></li>
                        <li><a class="dropdown-item" href="{{route('articleByCategory', ['category' => 'Network Security'])}}">Network Security</a></li>
                    </ul>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="{{route('writers')}}">Writers</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="{{route('popular')}}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>