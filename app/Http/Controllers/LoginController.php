<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Models\User;
                                                                                                         

// class LoginController extends Controller
// {
// public function index(){
//     return view('login.index');
// }  
// public function login_proses(Request $request){
//     $request->validate([
//    'email' => 'required',
//    'password' => 'required',
//     ]);
//     $data =  User::create([
//         'name' => $request->name,
//         'email' => $request->email,
//         'password' => $request->password,
//     ]);
//     return redirect()->route('dashboard');
// }

// public function registrasi(){
//     return view('auth.registrasi');
// }
// public function registrasi_proses(Request $request){
//   $request->validate([
//             'nama'          => 'required',
//             'email'         => 'required',
//             'password'      => 'required',
//             'phone_number'  => 'required',
//         ]);        

//         $data = User::create ([
//             'name'      => $request->name,
//             'email'     => $request->email,
//             'password'  => $request->password,
//         ]);
           

//             return redirect()->route('dashboard');
// }

//     public function logout(){
//         auth::logout();
//      return redirect()->route('login')->with('success', 'kamu berhasil logout');   
//     }
// }
