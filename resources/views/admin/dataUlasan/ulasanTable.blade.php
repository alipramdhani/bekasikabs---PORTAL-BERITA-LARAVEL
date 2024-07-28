<div class="container rounded-2 shadow-sm p-5 m-3 bg-white">
    <h3 class="text-center mb-5">Tabel Data Ulasan</h3>

    <table class="table table-bordered mb-5">
        <thead class="table-light">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Email</th>
        <th scope="col">Review Ulasan</th>
        <th scope="col">Dibuat</th>
        <th scope="col">Diedit</th>
        <th colspan="2">Aksi</th>
        </tr>
        </thead>

        @if ($ulasans->isEmpty())
            <tr>
                <td colspan="10">
                    <div class="p-5 d-flex justify-content-center">
                        Data Kosong! Silahkan input data terlebih dahulu.
                    </div>
                </td>
            </tr>
        @else

        @foreach ($ulasans as $key => $ulasan)
        <tbody>
            <tr>
                <td>
                {{$key + 1}}
                </td>
                <td style="max-width:250px;">
                    <p>
                    {{ $ulasan->nama_lengkap }}
                    {{-- cara membatasi kata 
                        {{ substr($ulasan->isi, 0, 500) }}{{ strlen($ulasan->isi) > 500 ? '...' : '' }} 
                    --}}
                    </p>
                </td>
                <td  style="max-width:250px;">
                    <p>
                    {{ $ulasan->email }}
                    </p>
                </td>
                <td  style="max-width:400px;">
                    <p>
                    {{ $ulasan->ulasan }}
                    </p>
                </td>
                <td style="width:100px;">
                    <p>
                    {{ $ulasan->created_at }}
                    </p>
                </td>
                <td style="width:100px;">
                    <p>
                    {{ $ulasan->updated_at }}
                    </p>
                </td>
                <td style="width:50px; vertical-align: middle;">
                    <form method="POST" action="{{ route('data-ulasan.destroy', $ulasan->id) }}">
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
                @if ($ulasans->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $ulasans->previousPageUrl() }}">Previous</a></li>
                @endif
        
                @for ($i = 1; $i <= $ulasans->lastPage(); $i++)
                    <li class="page-item {{ $ulasans->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $ulasans->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
        
                @if ($ulasans->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $ulasans->nextPageUrl() }}">Next</a></li>
                @else
                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                @endif
            </ul>
        </nav>    
    </div>  
</div> 
