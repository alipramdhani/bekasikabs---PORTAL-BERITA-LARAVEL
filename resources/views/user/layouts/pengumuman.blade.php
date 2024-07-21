{{-- Pengumuman --}}
<h3 class="mb-4 ">PENGUMUMAN</h3>
    @foreach ($pengumumans as $pengumuman)
        @php
            $limitedHeadline = Str::limit($pengumuman->judul_berita, 35);
            $limitedContent = Str::limit($pengumuman->isi, 80);
        @endphp
        <div class="pengumuman-item d-flex mb-2 border">
            <div>
                <img style="width: 100px; height: 80px;" class="rounded-2" src="{{ asset('storage/uploads/dataBerita/'.$pengumuman->gambar) }}" alt="terkini Image">
            </div>
            <div class="content-pengumuman mx-2">
                <a style=" font-size: 12px;" href="#" class="headline-section-1 text-wrap">{{ $limitedHeadline }}</a>
                <p style="text-align:justify; font-size: 10px;" class="content-section-1 text-wrap" >{!! $limitedContent !!} 
                <br>
                <a class="selengkapnya" href="#">Selengkapnya ></a></p>
            </div>
        </div>
    @endforeach