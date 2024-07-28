{{-- Pengumuman --}}
<h3 class="mb-4 ">TERKINI</h3>
    @foreach ($data_terkinis as $terkini)
        @php
            $limitedHeadline = Str::limit($terkini->judul_berita, 35);
            $limitedContent = Str::limit($terkini->isi, 80);
        @endphp
        <a href="{{ route('detailBerita.show', $terkini->id_berita) }}">
            <div class="d-flex mb-3 ">
                <div>
                    <img style="width: 100px; height: 80px;" class="rounded-2" src="{{ asset('storage/uploads/dataBerita/'.$terkini->gambar) }}" alt="terkini Image">
                </div>
                <div class="mx-2">
                    <a style=" font-size: 12px;" href="{{ route('detailBerita.show', $terkini->id_berita) }}" class="headline-section-1 text-wrap">{{ $limitedHeadline }}</a>
                    <p style="text-align:justify; font-size: 10px;" class="content-section-1 text-wrap" >{!! $limitedContent !!} 
                    <br>
                    <a class="selengkapnya" href="{{ route('detailBerita.show', $terkini->id_berita) }}">Selengkapnya ></a></p>
                </div>
            </div>
        </a>
    @endforeach