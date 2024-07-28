
<nav style="height: 65px; " class=" shadow-md navbar navbar-expand-lg fixed-top">
    <div class="container col">
        <a class="navbar-brand logo" href="{{route('home.index')}}">
            <img src="{{ asset('images/logo-portal.png') }}" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand logo" href="#">
                <img src="{{('images/logo-portal.png')}}" alt="">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kategori.pemerintah') }}">Pemerintah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kategori.hukum') }}">Hukum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kategori.nasional') }}">Nasional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kategori.jawabarat') }}">Jawab Barat</a>
                </li>
            </ul> 
            </div>
        </div>
    </div>
</nav>  
