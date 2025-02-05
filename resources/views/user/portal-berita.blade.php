<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bekasikab.go.id</title>
    {{-- css eksternal --}}
    <link href="{{ asset('css/portal-berita.css') }}" rel="stylesheet">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- header start --}}
    <section id="header">
      <div class="p-4">
        @include('user.header')
      </div>
    </section>
    {{-- header end --}}

    {{-- Konten --}}
    {{-- Section-1 Start --}}
    <section id="section-1">
      <div class="container-fluid row">
          {{-- Slide news --}}
          <div id="carousel" class="col-8 px-5">
            @include('user.layouts.slides')
          </div>
  
          {{-- Pengumuman news --}}
          <div id="terkini" class="col-4 border-start px-5 pt-5" style="overflow-y: auto;">
            @include('user.layouts.pengumuman')
          </div>
      </div>
  </section>

      {{-- <div class="m-2 border">
        <div>
          @include('user.layouts.section-1')
          @include('user.layouts.section-2')
          @include('user.layouts.section-3')
        </div>
      </div> --}}

      {{-- header start --}}
    <section id="footer">
      <div>
        @include('user.footer')
      </div>
    </section>
    
    {{-- header end --}}
    <script src="https://kit.fontawesome.com/f907dac75f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>