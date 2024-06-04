<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Validation\Rule;
class LoginController extends Controller{
    // public function __construct(){
    //     $this->middleware('admin');
    // }
    public function login(){
        $users = Admin::all();
        return view('login/login', compact('users'));
    }
    public function loginsubmit(Request $request){
        $user = Admin::where('name', '=', $request->name)->first();
        if(!$user){
            return redirect()->back();
        }
        else{
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string',],
                'password' => ['required', 'string']
            ]);
            if ($validator->fails()) {
                return redirect()->back();
            } else {
                if($user->password === $request->password){
                    Auth::login($user);
                    return redirect()->route('customer.count');
                }
                else{
                    return redirect()->back();
                }
            }
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}