<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
                                                                                                         

class LoginController extends Controller
{
public function index(){
    return view('sesi.index');
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
