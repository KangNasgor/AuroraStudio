<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function index()
    {
        return view('sesi.index');
    }

    public function login(Request $request)
    {
        // Validate the request input
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to find the user by email
        $user = User::where('email', $request->email)->first(); 
        $user->email= $request->email;
        $user->password = Hash::make($request->password); // Hash the password
        $user->save();

        // if (!$user || Hash::check($request->password, $user->password)) {
        //     // If user doesn't exist or password is incorrect, redirect back with error
        //     return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.'])->withInput();
        // }

        // Log the user in
        Auth::login($user);

        // Redirect to the home route
        return redirect()->route('home');
    }

public function registrasi(){
    return view('registrasi');
}
public function proses(Request $request){
       // dd($request->all());
       $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
    ]);

    // Create a new user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
        return redirect('login')->with('success', 'Registration successful, please check your phone for verification.');
}
public function logout()
    {
        Auth::logout();
        return redirect()->route('registrasi'); // Mengarahkan ke halaman register setelah logout
    }
}
