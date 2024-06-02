@extends('navbar')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }
        .logo {
            width: 100%;
            max-height: 10cm;
        }
        .login-container {
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;
        }
        .login-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .forgot-password a {
            text-decoration: none;
            color: #007bff;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
        .btn-register {
            width: 25%;
            min-width: 150px; 
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6">
                
                <div class="login-container">
                    <form action="{{ route('proses') }}" method="POST">
                        @csrf
                        <h2 class="login-title mb-4">Registrasi</h2>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="email" class="form-label mb-0 me-3 ms-1">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control ms-auto">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="name" class="form-label mb-0 me-3">Username</label>
                            <input type="text" id="name" name="name" placeholder="Username" class="form-control ms-auto">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-4 d-flex align-items-center">
                            <label for="password" class="form-label mb-0 me-3">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control ms-auto">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-register mt-3">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif
</body>
</html>

@endsection
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>umkm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }
        .logo {
            width: auto;
            max-height: 10cm;
        }
        .login-container {
            padding: 58px;
            max-width: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;
        }
        .login-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .forgot-password a {
            text-decoration: none;
            color:;
            width: 10px;
        }
        .forgot-password {
            text-decoration: none;
            color: #000000;
        }
        .login-title{
            margin-bottom:15px;
        }
        .form-label{
           margin-right:20cm; 
        }
        .button{
            color:#948979;

        }
    </style>
</head>
<body>
<div class="container text-center">
        <div class="row g-2">
            <div class="col-md-6">
                <div class="p-3 bg-white rounded shadow">
                    <h1 class="text">THE BEST STUDIO</h1>
                    <img src="logo.jpg" alt="Logo" class="logo">
                </div>
            <!-- <div class="login-container col-6 p-3 shadow p-3 mb-5 bg-body-tertiary rounded" >
            <form action="{{ route('proses') }}" class="form" method="POST">
                @csrf
                <p class="name">
                    name
                    <input type="text" id="name" placeholder="Username" class="mb-2" style="margin-bottom: 10px;">
                </p>
                @error('email')
                         <small>{{ $message }}</small>
                    @enderror
                    <p class="email">
                        Email
                        <input type="text" name="email" placeholder="Email" class="mb-2" style="margin-bottom: 10px;">
                    </p>
                    @error('email')
                         <small>{{ $message }}</small>
                    @enderror
                    <p class="password">
                        Password
                        <input type="password" name="password" placeholder="Password" class="mb-2" style="margin-bottom: 10px;">
                    </p>
                    @error('password')
                         <small>{{ $message }}</small>
                    @enderror -->
                    <!-- <div class="col-md-6">
                <div class="login-container">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h2 class="login-title">registrasi</h2>
                        <div class="mb-3">
                            <label for="email" class="form-label ms-auto">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label ms-auto">Email</label>
                            <input type="text" id="name" name="email" placeholder="Email" class="form-control">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <br>
                           <br>
                        </div>
                    <br>
                    <br>
                    <input type="submit" href="/booking" value="Login" name="login" class="login mb-3">
                    <div class="forgot-password mb-4" style="text-decoration: none;">
                        <a href="/login"><b>kembali</b></a>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif
</body>
</html>
 --> 
