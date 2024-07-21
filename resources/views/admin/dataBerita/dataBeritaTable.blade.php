<div class="container rounded-2 shadow-sm p-5 m-3 bg-white">
    <h3 class="text-center mb-5">Tabel Data Berita</h3>
    <div class="d-flex gap-3">
        <a class="btn btn-primary mb-4 me-auto" style="font-weight: 600;" href="{{ route('data-berita.create')}}">+ Tambah</a>
        <div style="width: 150px;">
            <select class="form-select rounded-pill" aria-label="Default select example" name="kategori" id="kategori">
                <option selected>Filter</option>
                <option value="Gambar">Gambar</option>
                <option value="Terkini">Terkini</option>
                <option value="Pengumuman">Pengumuman</option>
                <option value="Nasional">Nasional</option>
                <option value="Jabar">Jabar</option>
                <option value="Hukum">Hukum</option>
                <option value="Video">Video</option>
            </select>
        </div>
    </div>

    <table class="table table-bordered mb-5">
        <thead class="table-light">
        <tr>
        <th scope="col">No</th>
        <th scope="col">ID</th>
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Kategori</th>
        <th scope="col">Isi</th>
        <th scope="col">Tanggal Berita</th>
        <th scope="col">Reporter</th>
        <th scope="col">Editor</th>
        {{-- <th scope="col">Dibuat</th>
        <th scope="col">Diedit</th> --}}
        <th colspan="2">Aksi</th>
        </tr>
        </thead>

        @if ($data_beritas->isEmpty())
            <tr>
                <td colspan="10">
                    <div class="p-5 d-flex justify-content-center">
                        Data Kosong! Silahkan input data terlebih dahulu.
                    </div>
                </td>
            </tr>
        @else

        @foreach ($data_beritas as $key => $berita)
        <tbody>
            <tr>
                <td>
                {{$key + 1}}
                </td>
                <td>
                    <p>{{$berita->id_berita}}
                    </p>
                </td>
                <td>
                    <img src="{{ asset('storage/uploads/dataBerita/'.$berita->gambar) }}" alt="Gambar Berita" style="max-width: 120px;">
                </td>
                <td style="width:150px;" >
                    <p>
                    {{ $berita->judul_berita }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $berita->kategori }}
                    </p>
                </td>
                <td style="width:300px;">
                    <p>
                        {{limitChars($berita->isi, 500) }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $berita->tanggal }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $berita->reporter }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $berita->editor }}
                    </p>
                </td>
                {{-- <td>
                    <p>
                    {{ $berita->created_at }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $berita->updated_at }}
                    </p>
                </td> --}}
                <td style="width:50px; vertical-align: middle;">
                    <a class="p-0" href="{{ route('data-berita.edit', ['id' => $berita->id_berita]) }}">
                        <span class="rounded p-2 bg-warning material-symbols-outlined m-0 " style="color: black;" >
                        edit_square
                    </span>
                </a>
                </td>
                <td style="width:50px; vertical-align: middle;">
                    <form method="POST" action="{{ route('data-berita.destroy', $berita->id_berita) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger delete-confirm p-0">
                            {{-- <i class="fa-solid fa-trash fa-lg" style="color: #ffffff;"></i> --}}
                            <span class="material-symbols-outlined rounded p-2">
                                delete
                            </span>
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
        @endif
    </table>
    <div>
        {{-- Pagenation --}}
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if ($data_beritas->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $data_beritas->previousPageUrl() }}">Previous</a></li>
                @endif
        
                @for ($i = 1; $i <= $data_beritas->lastPage(); $i++)
                    <li class="page-item {{ $data_beritas->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $data_beritas->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
        
                @if ($data_beritas->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $data_beritas->nextPageUrl() }}">Next</a></li>
                @else
                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                @endif
            </ul>
        </nav>    
    </div>  
</div> 
