<div class="container p-2 d-flex my-5">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        @foreach ($slides as $index => $slide)
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="{{ $index }}" @if ($index == 0) class="active" aria-current="true" @endif aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
      </div>
      <div class="carousel-inner">
        @foreach ($slides as $index => $slide)
          <div class="carousel-item @if ($index == 0) active @endif">
            <div>
              <img class="rounded-2" src="{{ asset('storage/uploads/dataBerita/'.$slide->gambar) }}" alt="Slide Image">
              <div class="gradient-overlay rounded-bottom"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <a class="headline" href="{{ route('detailBerita.show', $slide->id_berita) }}">{{ $slide->judul_berita }}</a>
              <p class="text-warning">Publish at {{ date('d F Y', strtotime($slide->tanggal)) }}</p>
            </div>
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  