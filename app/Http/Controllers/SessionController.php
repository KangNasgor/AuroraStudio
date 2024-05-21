<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
                                                                                                         

class SessionController extends Controller
{
public function index(){
    return view('sesi/index');
}  
public function login(Request $request){
    $user = Users::where('email', '=', $request->email)->first();
    if(!$user){
        Log::info("email not found");
        return redirect()->back();
    }
    else{
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        Log::info("Validator gg");
        if ($validator->fails()) {
            Log::info("Validator failed");
            return redirect()->back();
        } else {
            if($user->password === $request->password){
                Auth::login($user);
                Log::info("berhasil");
                return redirect()->route('example');
            }
            else{
                Log::info("password not found");
                return redirect()->back();
            }
        }
    // Auth::attempt() digunakan untuk mencoba mengotentikasi pengguna menggunakan kredensial yang diberikan (biasanya email dan password). Jika kredensial cocok dengan catatan di database, pengguna akan diautentikasi dan sesi akan dimulai.Namun, Auth::attempt() tidak mengembalikan objek pengguna yang diautentikasi. Sebaliknya, fungsi ini mengembalikan true jika autentikasi berhasil dan false jika gagal. Untuk mendapatkan objek pengguna yang diautentikasi, Anda dapat menggunakan fungsi Auth::user() setelah berhasil memanggil Auth::attempt().
    }
}
public function registrasi(){
    return view('auth.registrasi');
}
public function proses(Request $request){
        // Validasi input
        // $request->validate([
        //     'name' => 'required|max:225',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required',
        // ]);

        // Buat user baru
        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
        ]);
           
            return redirect()->route('login');
    }

    public function logout(){
        auth::logout();
     return redirect()->route('login')->with('success', 'kamu berhasil logout');   
    }
}
