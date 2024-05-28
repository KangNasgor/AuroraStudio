<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


                                                                                                        
class SessionController extends Controller
{
public function index(){
    return view('sesi/index');
}  
public function login(Request $request){
    $user = User::where('email', '=', $request->email)->first();
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
       // dd($request->all());
       $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Create a new user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'active' => true,
    ]);
        return redirect('login')->with('success', 'Registration successful, please check your phone for verification.');
}
public function logout(Request $request) {
    $request->session()->flush();

    return redirect()->route('login');
}

}