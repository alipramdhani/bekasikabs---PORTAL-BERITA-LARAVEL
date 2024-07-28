<h2 class="mb-3 text-center text-white">Ulasan</h2>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner ">
        @php
            $reviews = $ulasans->chunk(3);
        @endphp
        @foreach ($reviews as $index => $review)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="d-flex justify-content-center gap-5" style="height: 350px;">
                    @foreach ($review as $ulasan)
                        <div class="py-4 shadow rounded-4 my-5 bg-white text-break" style="width: 400px; text-align:center; padding:0 25px;">
                            <h6>{{ $ulasan->nama_lengkap }}</h6>
                            <p style="font-size: 14px">{{ $ulasan->created_at->format('d M Y') }}</p>
                            <div class="text-break">
                                <p style="font-size: 12px">"{{ $ulasan->ulasan }}"</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    
    <a class="carousel-control-prev" style="width: 130px;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" style="width: 130px;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
