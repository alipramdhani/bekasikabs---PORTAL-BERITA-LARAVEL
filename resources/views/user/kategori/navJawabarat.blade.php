<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekasikabs.com</title>
    <script src="https://kit.fontawesome.com/f907dac75f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navCategory.css') }}">
    <link rel="stylesheet" href="#">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@22,400,0,0" />
    
</head>
<body>
    <!-- header -->
    <section id="header">
        <div class="p-4">
            @include('user.header')
        </div>
    </section>

    <section id="section-2">
        <div class="row p-5">
            <!-- News 2 -->
            <div id="jawabarat" class="col p-3">
                <h3 class="mx-3 mb-5">Jawa Barat</h3>
                @php $counter = 0; @endphp
                @foreach ($jawabarats as $jawabarat)
                    @php
                        $limitedHeadline = Str::limit($jawabarat->judul_berita, 60);
                        $limitedcontent = Str::limit($jawabarat->isi, 230);
                    @endphp
                    <div class="terkini-item d-flex my-5">
                        <a href="{{ route('detailBerita.show', $jawabarat->id_berita) }}">
                            <div class="mx-3">
                                <img width="400" height="250" class="rounded-4" src="{{ asset('storage/uploads/dataBerita/'.$jawabarat->gambar) }}" alt="terkini Image">
                            </div>
                        </a>
                        <div class="mx-5">
                            <p style="color: #fe7d21;" class="fs-6 lh-lg">
                            {{ \Carbon\Carbon::parse($jawabarat->tanggal)->format('d F Y') }}
                            </p>
                            <a href="{{ route('detailBerita.show', $jawabarat->id_berita) }}" class="fs-4 headline-section-2 text-wrap">
                                {{ $limitedHeadline }}
                            </a>
                            <p style="text-align:justify;" class="text-wrap fs-6 lh-lg">
                                {{ $limitedcontent }}
                            </p>
                            
                            <a class="selengkapnya text-end fs-6 my-3 py-2 px-3 rounded-3" href="{{ route('detailBerita.show', $jawabarat->id_berita) }}">
                                Selengkapnya > 
                            </a>
                           
                            <!-- <a class="py-1 px-3 btn btn-primary rounded-2 " href="#">Baca</a> -->
                        </div>
                    </div>
                    @php $counter++; @endphp
                    @if ($counter >= 10) @break @endif <!-- Stop the loop after 10 news -->
                @endforeach
            </div>
        </div>
    </section>

    <section id="footer">
        <div>
          @include('user.footer')
        </div>
    </section>

    <footer>
        <div class="py-3 bg-white fixed-bottom">
            <div class="container-fluid">
                <div class="d-flex justify-content-between mx-2 small gap-3">
                    <div class="text-muted">
                        copyright &copy; {{ 'Ubharanews@' . date('Y') }}
                    </div>
                    <div>
                        <a href="#">Privacy Policy</a> &middot;
                        <a href="#"> Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
