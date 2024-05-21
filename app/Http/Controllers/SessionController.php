<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
>>>>>>> 64c44a93efdb34e7998fabcfc13992e2a93c9d64
                                                                                                         

class SessionController extends Controller
{
public function index(){
    return view('sesi/index');
}  
public function login(Request $request){
<<<<<<< HEAD
    $user = User::where('name', '=', $request->name)->first();
    if(!$user){
        return redirect()->back();
        
    }
    else{
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return redirect()->back();
            
        } else {
            if($user->password === $request->password){
                Auth::login($user);
                return redirect()->route('example');
            }
            else{
                return redirect()->back('sesi');
                echo 'fail';
            }
        }
    // Auth::attempt() digunakan untuk mencoba mengotentikasi pengguna menggunakan kredensial yang diberikan (biasanya email dan password). Jika kredensial cocok dengan catatan di database, pengguna akan diautentikasi dan sesi akan dimulai.Namun, Auth::attempt() tidak mengembalikan objek pengguna yang diautentikasi. Sebaliknya, fungsi ini mengembalikan true jika autentikasi berhasil dan false jika gagal. Untuk mendapatkan objek pengguna yang diautentikasi, Anda dapat menggunakan fungsi Auth::user() setelah berhasil memanggil Auth::attempt().

}
=======
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
   
>>>>>>> 64c44a93efdb34e7998fabcfc13992e2a93c9d64
}
public function registrasi(){
    return view('auth.registrasi');
}
<<<<<<< HEAD
public function proses(Request $request){
        // Validasi input
        // $request->validate([
        //     'name' => 'required|max:225',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required',
        // ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
        ]);
           
            return redirect()->route('index');
            echo "pler";
=======
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
>>>>>>> 64c44a93efdb34e7998fabcfc13992e2a93c9d64
    }

    public function logout(){
        auth::logout();
     return redirect()->route('login')->with('success', 'kamu berhasil logout');   
    }
}
<<<<<<< HEAD

=======
>>>>>>> 64c44a93efdb34e7998fabcfc13992e2a93c9d64
