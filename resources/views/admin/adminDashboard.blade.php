<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Berita | Data Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet">
</head>
<body id="canvas">
  <section>
      @include('admin.adminSidebar')
  </section>
  
  {{-- Tabel Data Berita --}}
  <section id="newsTable">
      <div class="newsTable">
        {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="p-0 mx-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" style="text-decoration:none; font-weight: 600; ">Data Admin</li>
              <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
            </ol>
        </nav> --}}
        <div class="d-flex justify-content-center">
            <div class="container rounded-2 shadow-sm p-5 m-3 bg-white">
                <h3 class="text-center mb-3">Selamat Datang Di Portal Admin Bekasikabs</h3>
            </div>  
        </div>
      </div>
  </section>
</body>
</html>
