  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit | Berita Gambar</title>
    <link href="{{ asset('css/data-berita-update.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
  </head>
  <body id="canvas">
    <section>
      @include('admin.adminSidebar')
    </section>
    <section id="formUpdate">
      <div class="formUpdate">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="p-0 mx-3">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('data-berita.dataBerita')}}" style="text-decoration:none; font-weight: 600; ">Berita Gambar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
          </ol>
        </nav>
        <div class="d-flex justify-content-center">
          <div class="container rounded-2 shadow-sm p-5 m-3 bg-white">
            <form method="POST" enctype="multipart/form-data" action="{{ route('data-berita.update', $data_beritas->id_berita)}}" >
                @csrf
                @method('PUT')
              <div class="text-center mb-3">
                <h3 style="font-weight: 600">Edit Berita</h3>
              </div>
              <div>
                <div class="d-flex gap-3">
                  <div class="mb-3 w-25">
                    <label for="id_berita" class="form-label">ID Berita</label>
                    <fieldset disabled >
                      <input type="text" class="form-control" value="{{$data_beritas->id_berita}}">
                    </fieldset>
                      <input type="hidden" class="form-control" id="id_berita" name="id_berita" value="{{$data_beritas->id_berita}}">
                  </div>
                  <div class="mb-3 flex-fill">
                    <label for="judul_berita" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="judul_berita" name="judul_berita"
                    value="{{$data_beritas->judul_berita}}">
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="mb-3 flex-fill">
                    <label for="kate" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori" id="kategori">
                      <option selected>-- Pilih Kategori --</option>
                      @foreach ($kategoris as $kategori)
                          <option value="{{ $kategori->nama_kategori }}" {{ $data_beritas->kategori == $kategori->nama_kategori ? 'selected' : '' }}>
                              {{ $kategori->nama_kategori }}
                          </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3 flex-fill">
                    <label for="tanggal" class="form-label">Tanggal Berita</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                    value="{{$data_beritas->tanggal}}">
                  </div>
                  <div class="mb-3 flex-fill">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" size="20" require="">
                    <p class="my-1" style="font-style: italic; color: red;">gambar : {{$data_beritas->gambar}}</p>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="isi" class="form-label">Isi Berita</label>
                  <textarea class="form-control" name="isi" id="isi" rows="6">{{$data_beritas->isi}}</textarea>
                </div>
                <div class="d-flex gap-3">
                  <div class="mb-3 flex-fill">
                    <label for="reporter" class="form-label">Reporter</label>
                    <input type="text" class="form-control" id="reporter" name="reporter"
                    value="{{$data_beritas->reporter}}">
                  </div>
                  <div class="mb-3 flex-fill">
                    <label for="editor" class="form-label">Editor</label>
                    <input type="text" class="form-control" id="editor" name="editor"
                    value="{{$data_beritas->editor}}">
                  </div>
                </div>
                
              </div>
              <div class="mt-5 d-flex justify-content-between ">
                <a href="{{route('data-berita.dataBerita') }}" class="btn btn-danger"><strong>Kembali</strong></a>
                <button class="btn btn-primary update-confirm" style="width: 150px;" type="submit"><strong>Simpan</strong></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $('.update-confirm').on('click', function (event) {
      event.preventDefault();
      const form = $(this).closest('form');
      const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
              confirmButton: "btn btn-success mx-2 py-2 px-3",
              cancelButton: "btn btn-danger mx-2 py-2 px-3"
          },
          buttonsStyling: false
      });
      swalWithBootstrapButtons.fire({
          title: "Simpan Data?",
          text: "Apakah anda yakin mengubah data?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Simpan!",
          cancelButtonText: "Batal!",
          reverseButtons: true
      }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
          ) {
              swalWithBootstrapButtons.fire({
                  title: "Dibatalkan",
                  text: "Batal Mengubah Data.",
                  icon: "error"
              });
          }
      });
      })
    </script>
  </body>
  </html>
  