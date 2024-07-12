<section id="section-1">
        <div class="container  p-2 d-flex my-5 border">
            {{-- Gambar slide --}}
            <div class="col-sm-8 ">
              <div class="images-slide">
                {{-- test --}}
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('images/image-2.jpg') }}" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <div class="mb-2 d-flex gap-3 align-items-center">
                          <p class="gover shadow-sm">Pemerintahan</p>
                          <p class="time">Mar 18, 2024 - 19:35:37 Posted By : Newsroom Diskominfosantik</p>
                        </div>
                          <a class="headline" href="#">Pemkab Bekasi Antisipasi Kenaikan Harga Sembako Dibulan Suci Ramadan</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/image-3.jpg') }}" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <div class="mb-2 d-flex gap-3 align-items-center">
                          <p class="gover shadow-sm">Pemerintahan</p>
                          <p class="time">Mar 18, 2024 - 19:35:37 Posted By : Newsroom Diskominfosantik</p>
                        </div>
                          <a class="headline" href="#">Pemkab Bekasi Antisipasi Kenaikan Harga Sembako Dibulan Suci Ramadan</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/image-4.jpg') }}" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <div class="mb-2 d-flex gap-3 align-items-center">
                          <p class="gover shadow-sm">Pemerintahan</p>
                          <p class="time">Mar 18, 2024 - 19:35:37 Posted By : Newsroom Diskominfosantik</p>
                      </div>
                      <a class="headline" href="#">Masuki Masa Tanam, Hasil Panen Petani Diharapkan Meningkat</a>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- test --}}
              </div>
            </div>

            {{-- Pengumuman --}}
            <div class="col-sm-4">
              <div class="news-1">
                <h3 class="headnews">PENGUMUMAN</h3> 
                <hr>

                @foreach ($data_beritas as $key => $berita)
                {{-- Check kategori --}}
                @if ($berita->kategori == 'Pengumuman')
                    {{-- Tampilkan hanya jika kategori sesuai --}}
                    <div class="my-2 mx-1 d-flex gap-3">
                        <div class="border border-1 border-dark-subtle p-1">
                            <img src="{{ asset('storage/uploads/dataBerita/'.$berita->gambar) }}" alt="" style="max-width: 100px;">
                        </div>
                        <div class="me-3">
                            <p class="tgl">{{ $berita->created_at->format('M d, Y') }}</p>
                            <a class="judul" href="#">{{ limitChars($berita->judul_berita, 70) }}</a>
                        </div>
                    </div>
                @endif
            @endforeach

              </div>
            </div>
        </div>
    </section>
  {{-- Section-1 End --}}