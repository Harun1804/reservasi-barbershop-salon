<nav class="navbar navbar-expand-lg bg-primary-ijigo">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.html">
            <img src="{{ asset('assets/icons/ijigo.png') }}" alt="logo ijigo" width="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-5">
                    <a class="nav-link {{ Request::segment(2) == 'home' ? 'text-white' : 'text-dark' }} h5" aria-current="page" href="{{ route('pelanggan.home') }}">Home</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link {{ Request::segment(2) == 'waiting-list' ? 'text-white' : 'text-dark' }} h5" href="{{ route('pelanggan.waiting.list') }}">Waiting List</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link {{ Request::segment(2) == 'history' ? 'text-white' : 'text-dark' }} h5" href="{{ route('pelanggan.history') }}">History</a>
                </li>
                <li class="nav-item mx-5">
                    <a href="{{ route('logout') }}">
                        <i class="bi bi-person-circle" style="font-size: 1.8rem"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>