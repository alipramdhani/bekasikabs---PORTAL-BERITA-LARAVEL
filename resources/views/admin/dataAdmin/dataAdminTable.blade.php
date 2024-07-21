<div class="container rounded-2 shadow-sm p-5 m-3 bg-white">
    <h3 class="text-center mb-5">Tabel Data Admin</h3>
    <a data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-primary mb-4" style="font-weight: 600;" href="{{ route('data-admin.create')}}">+ Tambah</a>
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="{{route('data-admin.store')}}" >
              @csrf
              <div class="text-center mb-3">
                <div class="modal-header">
                  <h3>Tambah Admin</h3>
                </div>
              </div>
              <div class="modal-body px-4">
                <div class="mb-3 flex-fill">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama"
                  required>
                </div>
                <div class="mb-3 flex-fill">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username"
                  required>
                </div>
                <div class="mb-3 flex-fill">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email"
                  required>
                </div>
                <div class="mb-3 flex-fill">
                  <label for="password" class="form-label">Password</label>
                  <input type="text" class="form-control" id="password" name="password"
                  required>
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
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Dibuat</th>
        <th scope="col">Diedit</th>
        <th colspan="2">Aksi</th>
        </tr>
        </thead>

        @if ($data_admins->isEmpty())
            <tr>
                <td colspan="10">
                    <div class="p-5 d-flex justify-content-center">
                        Data Kosong! Silahkan input data terlebih dahulu.
                    </div>
                </td>
            </tr>
        @else

        @foreach ($data_admins as $key => $admin)
        <tbody>
            <tr>
                <td>
                {{$key + 1}}
                </td>
                <td>
                    <p>
                    {{ $admin->nama }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $admin->username }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $admin->email }}
                    </p>
                </td>
                <td>
                    <div class="input-group">
                        <input style="width: 100px;" type="password" class="form-control border-0" value="{{ $admin->password }}" id="password_{{$key}}" readonly>
                        <button class="btn border-0" type="button" onclick="togglePasswordVisibility({{$key}})">
                            <span class="material-symbols-outlined" id="icon_{{$key}}">visibility</span>
                        </button>
                    </div>
                </td>
                <td>
                    <p>
                    {{ $admin->created_at }}
                    </p>
                </td>
                <td>
                    <p>
                    {{ $admin->updated_at }}
                    </p>
                </td>
                <td style="width:50px; vertical-align: middle;">
                    <a data-bs-toggle="modal" data-bs-target="#editModalAdmin_{{ $admin->id_admin }}" class="p-0 btn border-0" href="#">
                    <span class="rounded p-2 bg-warning material-symbols-outlined m-0 " style="color: black;" >
                        edit_square
                    </span>
                    </a>

                    <div class="modal fade" id="editModalAdmin_{{ $admin->id_admin }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('data-admin.update', ['id' => $admin->id_admin])}}" >
                              @csrf
                              @method('PUT')
                              <div class="text-center mb-3">
                                <div class="modal-header">
                                  <h3 class="modal-title" id="editModalLabel">Edit Admin</h3>
                                </div>
                              </div>
                              <div class="modal-body px-4">
                                <div class="mb-3 flex-fill">
                                  <label for="id_admin" class="form-label">ID Admin</label>
                                  <input type="text" class="form-control text-black-50" id="id_admin" name="id_admin" value="{{$admin->id_admin}}"
                                  readonly>
                                </div>
                                <div class="mb-3 flex-fill">
                                  <label for="nama" class="form-label">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama" name="nama"
                                  value="{{$admin->nama}}" required>
                                </div>
                                <div class="mb-3 flex-fill">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username"
                                  value="{{$admin->username}}" required>
                                </div>
                                <div class="mb-3 flex-fill">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="text" class="form-control" id="email" name="email"
                                  value="{{$admin->email}}" required>
                                </div>
                                <div class="mb-3 flex-fill">
                                  <label for="password" class="form-label">Password</label>
                                  <input type="text" class="form-control" id="password" name="password"
                                  value="{{$admin->password}}" required>
                                </div>
                                <div class="mb-3 flex-fill">
                                  <label for="created_at" class="form-label">Dibuat</label>
                                  <input type="text" class="form-control text-black-50" id="created_at" name="created_at" value="{{$admin->created_at}}"
                                  readonly>
                                </div>
                              </div>  
                              <div class="modal-footer">
                                <div class="d-flex justify-content-end gap-3">
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                  <button class="btn btn-success" type="submit">Simpan</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </td>
                <td style="width:50px; vertical-align: middle;">
                    <form method="POST" action="{{ route('data-admin.destroy', $admin->id_admin) }}">
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
                @if ($data_admins->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $data_admins->previousPageUrl() }}">Previous</a></li>
                @endif
        
                @for ($i = 1; $i <= $data_admins->lastPage(); $i++)
                    <li class="page-item {{ $data_admins->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $data_admins->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
        
                @if ($data_admins->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $data_admins->nextPageUrl() }}">Next</a></li>
                @else
                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                @endif
            </ul>
        </nav>    
    </div>  
</div> 

