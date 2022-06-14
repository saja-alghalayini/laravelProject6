<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            <img width="120px" src="{{ asset('img/logo/a1.png') }}" alt="description of myimage">
            <!-- <i class="fa-solid fa-eye"></i>
            <span class="text-primary">nOOr</span> -->
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{ url('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('ask') }}" class="nav-item nav-link active">Asks</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Serves</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ url('book') }}" class="dropdown-item">Bodcaste Book</a>
                        <a href="{{ url('blog') }}" class="dropdown-item">Blog</a>
                        {{-- <a href="./team.html" class="dropdown-item">toolss</a> --}}

                    </div>
                </div>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ url('registration') }}" class="btn btn-primary px-4">Join Us</a>
        </div>
    </nav>
</div>
