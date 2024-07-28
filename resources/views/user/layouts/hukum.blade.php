{{-- Pengumuman --}}
<h4 class="mb-4 ">HUKUM</h4>
    @foreach ($hukums as $law)
        @php
            $limitedHeadline = Str::limit($law->judul_berita, 38);
            $limitedContent = Str::limit($law->isi, 80);
        @endphp
        <a href="{{ route('detailBerita.show', $law->id_berita) }}">
            <div class="mb-4 card bg-white rounded-2 shadow-sm"  style="width: 300px;">
                <div>
                    <img style="max-width: 300px; height: 200px;" class="card-img-top" src="{{ asset('storage/uploads/dataBerita/'.$law->gambar) }}" alt="terkini Image">
                </div>
                <div class="mx-2">
                    <a style=" font-size: 12px;" href="{{ route('detailBerita.show', $law->id_berita) }}" class="headline-section-1 text-wrap">{{ $limitedHeadline }}</a>
                    <p style="text-align:justify; font-size: 10px;" class="content-section-1 text-wrap" >{!! $limitedContent !!} 
                    <br>
                    <a class="selengkapnya" href="{{ route('detailBerita.show', $law->id_berita) }}">Selengkapnya ></a></p>
                </div>
            </div>
        </a>
    @endforeach