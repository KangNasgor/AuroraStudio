<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
                                                                                                         

class SessionController extends Controller
{
public function index(){
    return view('sesi/index');
}  
public function login(Request $request){
   $request->validate([
    'email'=>'required',
    'password'=>'required'
   ],[
    'email.required'=>'Email waib di isi',
    'password.required'=>'Password waib di isi',
   ]);

   $infologin = [
    'email' => $request->email,
    'password' => $request->password
   ]; 
        if (Auth::attempt($infologin)) {
            return redirect('sesi')->withError;
        } else {
            return 'gagal';
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
