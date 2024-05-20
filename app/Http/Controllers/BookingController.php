<?php

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        
        return view();
    }

    public function booking(){
        return view();
    }

    public function infopesanan($id){
        $bookings = DB::table('bookings')->get();
        return view('infopesanan', compact('bookings'));
    }
}
