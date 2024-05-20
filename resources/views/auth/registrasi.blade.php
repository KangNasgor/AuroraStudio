@extends('layout/layout')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>umkm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</style>
<style>
        .form{
            margin-left:50px;
            margin-right:50px;
        }
        .login-container{
            width:12cm;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row g-2">
            <div class="col-6">
                <div class="p-3">
                    <h1 class="text">THE BEST STUDIO</h1>
                    <img src="logo.jpg" alt="" class="logo">
                </div>
            </div>
        <div class="login-container col-6 p-3 shadow p-3 mb-5 bg-body-tertiary rounded">
            <h2 class="mb-4">Register</h2>
            <form action="{{ route('registrasi.proses') }}" class="form" method="POST">
                @csrf
                <p class="username" style="text-align:left;">
                  Username
                    <input type="text" id="username" placeholder="username" class="mb-1">
                    @error('username')
                         <small>{{ $message }}</small>
                    @enderror
                </p>
                <p class="email">
                    Email
                    <input type="text" id="email" placeholder="Email" class="mb-2" style="margin-bottom: 10px;">
                </p>
                @error('email')
                         <small>{{ $message }}</small>
                    @enderror
                <p class="password">
                    Password
                    <input type="password" id="password" placeholder="Password" class="mb-2" style="margin-bottom: 10px;">
                </p>
                @error('password')
                         <small>{{ $message }}</small>
                    @enderror
                <br>
                 <input type="submit" value="registrasi" name="registrasi" class="login mb-3">

                <div class="forgot-password mb-4" style="text-decoration: none;">
                <a href="{{ route('login') }}" ><B>kembali</B></a>
            </div>
        </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @if($message = Session::get('success'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif

    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif
  </body>
</html>
@endsection