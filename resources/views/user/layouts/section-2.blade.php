<section id="section-2">
  <div  class="container col my-3 border">
    {{-- Berita Terkini --}}
      <h3 class="headnews">Berita Terkini</h3>
      <hr>
      <div class="d-flex px-2 py-3 gap-3">
      @foreach ($data_beritas as $key => $berita)
      @if ($berita->kategori == 'Nasional')
      <div class="card">
        <img src="{{ asset('storage/uploads/dataBerita/'.$berita->gambar) }}" class="picture card-img-top" alt="image">
        <div class="card-body">
          <h5 class="card-title">{{ $berita->judul_berita }}</h5>
          <p class="card-text">{{ limitChars($berita->judul_berita, 100) }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
</section>