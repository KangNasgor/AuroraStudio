<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Hash;
// use App\Models\User;
                                                                                                         

class LoginController extends Controller
{
public function index(){
    return view('login.index');
}  
public function login_proses(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        //  |min:6
    ]);

    $data = $request->only('email', 'password');

    if (Auth::attempt( $data)) {
        // Redirect based on role
        $user = Auth::user();
        if ($data) {
            // routenya kalo mau diubah monggo, tapi homenya admin ada didalam admin(admin/home). sedangkan home user ada didalam view(view/home)
            return redirect()->route('example');
        } else {
            return redirect()->route('example');
        }
    } else {
        return redirect()->route('login')->with('failed', 'Email atau password salah.');
    }
}
// public function login_proses(Request $request){
//     $credentials = $request->validate([
//    'email' => 'required',
//    'password' => 'required',
//     ]);
    
//     $credentials = User::where('email', $credentials['email'])->first();

//     if (!$credentials || !Hash::check($credentials['password'], $password)) {
//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }

//     // Jika autentikasi berhasil
//     Auth::login($User);

//     return redirect()->intended('/');
//     return redirect()->route('dashboard');
//         return redirect()->route('login')->with('failed', 'email atau password salah');
//     }

public function registrasi(){
    return view('auth.registrasi');
}
public function registrasi_proses(Request $request){
       
        // Validasi input
        $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        // Buat user baru
        $data = User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => hash::make($request->password),
        ]);

            return redirect()->route('dashboard');
            return redirect()->route('registrasi')->with('failed', 'email atau password salah');
    }

    public function logout(){
        auth::logout();
     return redirect()->route('login')->with('success', 'kamu berhasil logout');   
    }
}
