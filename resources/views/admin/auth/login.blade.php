<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bekasikabs | Admin</title>
    <link href="{{ asset('css/auth-login.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body> 
    <header id="header">
      <nav class=" navbar navbar-expand-lg fixed-top shadow-md px-5">
        <div class="container-fluid">
          <a class="navbar-brand text-white z-0" href="#">
          <img width="150" src="{{('images/logo-portal.png')}}" alt="">
          </a>
        </div>
      </nav> 
    </header>

    <section id="home">
      <div class="judul d-flex   justify-content-around ">
        <div class="text">
          <div class="d-flex justify-content-center">
            {{-- <img width="300" src="{{('images/logo-portal.png')}}" alt=""> --}}
          </div>
          <div class=" rounded-4 px-4 py-5 mt-4">            
            <!-- start -->
              <form class="d-grid px-4" method="post" action="{{ route('admin.login') }}">
                @csrf
                <div class="mb-4">
                    <h4>Masuk</h4>
                </div>
                @error('all')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <div class="mb-4">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control rounded-3  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                
                <div class="mb-4">
                  <div class="d-flex justify-content-between">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                  </div>

                  <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control border rounded-start-2 @error('password') is-invalid @enderror" name="password" autocomplete="current-password"aria-describedby="passwordHelp">
                    <button class="btn border pt-2 pb-1" type="button" onclick="togglePasswordVisibility()">
                        <span class="material-symbols-outlined" id="passwordToggle">visibility</span>
                    </button>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                
                <button class=" mt-3 btn btn-login" type="submit" >{{ __('Masuk') }}</button>
              </form>
         <!-- end -->
          </div>
         
        </div>
        <div class="text-center">
            <img width="700" src="{{('images/news.png')}}" alt="">
        </div>  
      </div>
    </section>
    {{-- <section>
        @include('footer')
    </section> --}}
    <script>
      function togglePasswordVisibility() {
          var passwordInput = document.getElementById('password');
          var passwordToggle = document.getElementById('passwordToggle');
          if (passwordInput.type === "password") {
              passwordInput.type = "text";
              passwordToggle.textContent = "visibility_off";
          } else {
              passwordInput.type = "password";
              passwordToggle.textContent = "visibility";
          }
      }
    </script>
    <script>
        document.getElementById('showPasswordCheckbox').addEventListener('change', function() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = this.checked ? 'text' : 'password';
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-qnE8Ig56t6j/V8y+oVxjvq5JdjnqDXNoA5GLtb1yI754C+5Lz+1l5P5Agfqt6zK/" crossorigin="anonymous"></script>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
