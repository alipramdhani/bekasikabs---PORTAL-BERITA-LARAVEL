<div class="container rounded-2 shadow-sm p-5 m-3 bg-white">
    <h3 class="text-center mb-5">Tabel Data Kategori</h3>
    <div class="d-flex gap-3">
        <a data-bs-toggle="modal" data-bs-target="#tambahModal" class=" btn btn-primary mb-4" style="font-weight: 600;" href="{{ route('data-kategori.create')}}">+ Tambah</a>
    </div>

    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="{{route('data-kategori.store')}}" >
              @csrf
              <div class="text-center mb-3">
                <div class="modal-header">
                  <h3>Tambah Kategori</h3>
                </div>
              </div>
              <div class="modal-body px-4">
                <div class="my-3">
                  <label for="id_kategori" class="form-label">ID kategori</label>
                  <input type="text" class="form-control" id="id_kategori" name="id_kategori" require="">
                </div>
                <div class="my-3">
                  <label for="nama_kategori" class="form-label">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                  require="">
                </div>
              </div>  
              <div class="modal-footer">
                <div class="d-flex justify-content-end gap-3">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <button class="btn btn-success add-confirm" type="submit">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    <table class="table table-bordered mb-5">
        <thead class="table-light">
        <tr>
        <th scope="col">No</th>
        <th scope="col">ID </th>
        <th scope="col">Kategori</th>
        <th scope="col">Dibuat</th>
        <th scope="col">Diedit</th>
        <th colspan="2">Aksi</th>
        </tr>
        </thead>

        @if ($kategoris->isEmpty())
            <tr>
                <td colspan="10">
                    <div class="p-5 d-flex justify-content-center">
                        Data Kosong! Silahkan input data terlebih dahulu.
                    </div>
                </td>
            </tr>
        @else

        @foreach ($kategoris as $key => $kategori)
        <tbody>
            <tr>
                <td>
                {{$key + 1}}
                </td>
                <td>
                    <p>{{$kategori->id_kategori}}
                    </p>
                </td>
                <td style="width:300px;">
                    <p>
                    {{ $kategori->nama_kategori }}
                    {{-- cara membatasi kata 
                        {{ substr($kategori->isi, 0, 500) }}{{ strlen($kategori->isi) > 500 ? '...' : '' }} 
                    --}}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $kategori->created_at }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $kategori->updated_at }}
                    </p>
                </td>
                <td style="width:50px; vertical-align: middle;">
                    <form method="POST" action="{{ route('data-kategori.destroy', $kategori->id_kategori) }}">
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
                @if ($kategoris->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $kategoris->previousPageUrl() }}">Previous</a></li>
                @endif
        
                @for ($i = 1; $i <= $kategoris->lastPage(); $i++)
                    <li class="page-item {{ $kategoris->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $kategoris->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
        
                @if ($kategoris->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $kategoris->nextPageUrl() }}">Next</a></li>
                @else
                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                @endif
            </ul>
        </nav>    
    </div>  
</div> 
