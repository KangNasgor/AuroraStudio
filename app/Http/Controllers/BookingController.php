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
        return view('formbookingstudio');
    }

    public function formStore(Request $request)
{
    $this->validate($request, [
        'nama' => 'required',
        'nomor_wa' => 'required',
        'email' => 'required|email',
        'paket' => 'required',
        'tempat' => 'required',
        'tanggal' => 'required|date',
        'jam' => 'required|date_format:H:i',
        'lokasi' => 'required_if:tempat,Outdoor',
    ]);

    Bookings::create ([
        'nama'             =>$request->nama,
        'nomor_wa'          =>$request->nomor_wa,
        'email'          =>$request->email,
        'lokasi'          =>$request->lokasi,
        'paket'           =>$request->paket,
        'tempat'             =>$request->tempat,
        'tanggal'          =>$request->tanggal,
        'jam'          =>$request->jam,
        'created_at'             =>NOW()
    
    ]);

    return redirect()->route('infopesanan.index')->with('success', 'Data Berhasil Ditambah!');
}


    public function booking(){
        return view();
    }

    public function infopesanan(){
        $bookings = Bookings::latest()->first();
        return view('infopesanan', compact('bookings'));
    }
}
