 @extends('navbar')

@section('content')
<!--  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>umkm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
 .container {
            margin-top: 20px;
        }
        .form {
            margin: 0 auto;
            max-width: 90%;
        }
        .login-container {
            max-width: 100%;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #f8f9fa;
        }
        .logo {
            width: auto;
            height: 100%;
            max-height: 10cm;
        }
        .p-3 {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .text {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .mb-2 {
            display: block;
            margin-bottom: 10px;
        }
        .mb-3 {
            margin-bottom: 20px;
        }
        .mb-4 {
            margin-bottom: 30px;
        }
        .email, .password {
            margin-bottom: 20px;
        }
        .forgot-password a {
            text-decoration: none;
            color: #007bff;
        }
        .forgot-password a:hover {
            text-decoration: underline;
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
                <form action="{{ route('login') }}" class="form" method="POST" >
                    @csrf
                    <h2 class="mb-4">Login</h2>
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
                    @enderror
                    <br>
                    <br>
                    <input type="submit" href="/booking" value="Login" name="login" class="login mb-3">
                    <div class="forgot-password mb-4" style="text-decoration: none;">
                        <a href="{{route('registrasi')}}"><b>Register</b></a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    <style>
        .container {
            margin-top: 50px;
        }
        .login-container {
            padding: 48px;
            max-width: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;
            margin-right:300px;
            margin-left:300px;
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
            <!-- <div class="col-md-6">
                <div class="p-3 bg-white rounded shadow">
                    <h1 class="text">THE BEST STUDIO</h1>
                    <img src="logo.jpg" alt="Logo" class="logo">
                </div>
            </div> -->
            <div class="col-md-12">
                <div class="login-container">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h2 class="login-title">Login</h2>
                        <div class="mb-3">
                            <label for="email" class="form-label ms-auto">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                            @error('email')
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
                        <button type="submit" class="btn btn-secondary btn-sm">Login</button>
                        <div class="forgot-password mt-3">
                            <a href="{{ route('registrasi') }}"><b>Register</b></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif
@endsection 
