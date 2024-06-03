 @extends('navbar')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <div class="row g-4 justify-content-center">
            <div class="col-md-6">    
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif
@endsection 
