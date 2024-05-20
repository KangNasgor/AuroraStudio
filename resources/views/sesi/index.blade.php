@extends('layout/layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>umkm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <div class="login-container col-6 p-3 shadow p-3 mb-5 bg-body-tertiary rounded" >
                <form action="sesi/login" class="form" method="POST">
                    @csrf
                    <h2 class="mb-4">Login</h2>
                    <p class="email">
                    <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control" style="margin-bottom: 10px;">
                    </p>
                    @error('email')
                         <small>{{ $message }}</small>
                    @enderror
                    <p class="password">
                    <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" style="margin-bottom: 10px;">
                    </p>
                    @error('password')
                         <small>{{ $message }}</small>
                    @enderror
                    <br>
                    <br>
                    <input type="submit" value="Login" name="login" class="login mb-3">
                    <div class="forgot-password mb-4" style="text-decoration: none;">
                        <a href="{{route('registrasi')}}"><b>Register</b></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif
</body>
</html>
@endsection
