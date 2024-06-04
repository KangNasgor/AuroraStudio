<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingController extends Controller
{
    public function index(){

        return view();
    }

    public function form(): View
    {
        return view('formbooking');
    }

    public function formStore(Request $request)
{
    // $this->validate($request, [
    //     'nama' => 'required',
    //     'nomor_wa' => 'required',
    //     'email' => 'required',
    //     'paket' => 'required',
    //     'tempat' => 'required',
    //     'tanggal' => 'required',
    //     'jam' => 'required',
    //     // 'lokasi' => 'required_if:tempat,Outdoor',
    // ]);

    Bookings::create([
        'name'           =>$request->input('name'),
        'phone'          =>$request->input('phone'),
        'email'          =>$request->input('email'),
        'lokasi'         =>$request->input('lokasi'),
        'paket'          =>$request->input('paket'),
        'tempat'         =>$request->input('tempat'),
        'booking_date'   =>$request->input('booking_date'),
        'jam'            =>$request->input('jam'),
        'created_at'     =>NOW()
    ]);

    return redirect()->route('infopesanan.index');
}


    public function booking(){
        return view();
    }

    public function infopesanan(){
        $bookings = Bookings::latest()->first();
        return view('infopesanan', compact('bookings'));
    }
}
