<!doctype html>
<html lang="en">
	<head>
    <link href="{{ asset('css/admin-sidebar.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	</head>
	<body>
        <header id="header">
            <nav id="sidebarMenu" class=" collapse d-flex flex-column sidebar collapse z-1" >
                {{-- Gambar --}}
                <div class=" text-center mb-5">
                    <a class=" navbar-brand text-white " href="#"> 
                        {{-- <img width="150"  src="" alt=""> --}}
                    </a>
                </div>
                {{-- Menu --}}
                <div class="position-sticky menu">
                    <div class="list-group list-group-flush mx-3 mt-4">
                    <ul class="navbar-nav justify-content-center flex-grow-1"> 
                        <a class="d-flex gap-3 nav-link rounded-2 py-2 px-3 my-2" href="{{route('admin.dashboard')}}"  style="align-items: center">
                            <span class="material-symbols-outlined">
                                dashboard
                            </span>
                            <span>
                                Dashboard
                            </span>
                        </a>
                        <a class="d-flex gap-3 nav-link rounded-2 py-2 px-3 my-2" href="{{route('data-berita.dataBerita')}}" style="align-items: center">
                            <span class="material-symbols-outlined">
                                folder_open
                            </span>
                            <span>
                                Data Berita
                            </span>
                        </a>
                        <a class="d-flex gap-3 nav-link rounded-2 py-2 px-3 my-2" href="{{route('data-kategori.kategori')}}" style="align-items: center">
                            <span class="material-symbols-outlined">
                                category
                            </span>
                            <span>
                                Data Kategori
                            </span>
                        </a>
                        <a class="d-flex gap-3 nav-link rounded-2 py-2 px-3 my-2" href="{{route('data-admin.dataAdmin')}}"  style="align-items: center">
                            <span class="material-symbols-outlined">
                                manage_accounts
                            </span>
                            <span>
                                Data Admin
                            </span>
                        </a>
                    </ul>  
                    </div>
                </div>
                {{-- Logout --}}
                <div class="position-sticky bottom-0 start-50">
                    <div class="list-group list-group-flush mx-3 mt-4 ">
                        <ul 
                        class="navbar-nav justify-content-center flex-grow-1 "
                        > 
                        <a class="d-flex gap-3 nav-link rounded-2 py-2 px-3 my-2" href="{{route('admin.logout')}}"  style="align-items: center">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                            <span>
                                Keluar
                            </span>
                        </a>
                        </ul> 
                    </div>
                </div>
            </nav>
            <nav id="navbarMenu" class=" navbar navbar-expand-lg fixed-top shadow-sm z-0">
                <div class="container-fluid">
                    <p class="text-admin"> Selamat Datang, Admin!</p> 
                </div>
            </nav> 
        </header>
        <!-- Modal Logout-->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Keluar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin keluar?
                    </div>
                    <div class="modal-footer">
                        <a href="">Ya</a>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
        
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>

