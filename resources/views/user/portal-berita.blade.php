<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bekasikab.go.id</title>
    {{-- css eksternal --}}
    <link rel="stylesheet" href="{{ asset('css/portal-berita.css') }}">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- header start --}}
    <section id="header">
        <div class="p-4">
            @include('user.header')
        </div>
    </section>
    {{-- header end --}}

    {{-- Konten --}}
    {{-- Section-1 Start --}}
    <section id="section-1">
        <div class="container-fluid row">
            {{-- left news --}}
            <div id="carousel" class="col-12 col-lg-8 px-3 px-lg-5">
                <div>
                    @include('user.layouts.slides')
                </div>
                <div class="d-flex flex-column flex-lg-row justify-content-evenly gap-3 mt-3 mt-lg-0">
                    <div>
                        @include('user.layouts.pemerintah')
                    </div>
                    <div>
                        @include('user.layouts.hukum')
                    </div>
                    <div>
                        @include('user.layouts.nasional')
                    </div>
                </div>
            </div>

            {{-- right news --}}
            <div id="terkini" class="col-12 col-lg-4 border-lg-start px-3 px-lg-5 pt-3 pt-lg-5" style="overflow-y: auto;">
                <div class="mb-4">
                    @include('user.layouts.pengumuman')
                </div>
                <div class="mb-4">
                    @include('user.layouts.terkini')
                </div>
                <div class="mb-4">
                    @include('user.layouts.jawabarat')
                </div>
            </div>
        </div>
    </section>

    <section id="section-2" class="py-5">
        <div style="background-color: #789461;" class="py-5">
            @include('user.layouts.viewUlasan')
        </div>
        <div class="py-5">
            @include('user.layouts.addUlasan')
        </div>
    </section>

    <section id="footer">
        <div>
            @include('user.footer')
        </div>
    </section>

    <footer>
        <div class="py-3 bg-white fixed-bottom">
            <div class="container-fluid">
                <div class="d-flex justify-content-between mx-2 small gap-3">
                    <div class="text-muted">
                        copyright &copy; {{ 'Ubharanews@' . date('Y') }}
                    </div>
                    <div>
                        <a href="#">Privacy Policy</a> &middot;
                        <a href="#"> Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/f907dac75f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            const successMessage = '{{ session("success") }}';
            if (successMessage) {
                Swal.fire({
                    icon: "success",
                    title: successMessage,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    </script>
    
</body>
</html>
