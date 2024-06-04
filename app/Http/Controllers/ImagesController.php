<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ImagesController extends Controller
{
    public function images()
    {
        $images = Images::where('status_aktif', '=', 'aktif')->get();
        return view('admin/images/images', compact('images'));
    }
    public function create()
    {
        $images = images::where('status_aktif', '=', 'aktif')->get();
        return view('admin/images/crud/create', compact('images'));
    }
    public function store(Request $request)
    {
        try{
        $foto_wisuda = $request->file('foto_wisuda') ? file_get_contents($request->file('foto_wisuda')->getRealPath()) : null;
        $foto_personal = $request->file('foto_personal') ? file_get_contents($request->file('foto_personal')->getRealPath()) : null;
        $foto_grup = $request->file('foto_grup') ? file_get_contents($request->file('foto_grup')->getRealPath()) : null;
        $foto_maternity = $request->file('foto_maternity') ? file_get_contents($request->file('foto_maternity')->getRealPath()) : null;

        Images::create([
            'foto_wisuda' => $foto_wisuda,
            'foto_personal' => $foto_personal,
            'foto_grup' => $foto_grup,
            'foto_maternity' => $foto_maternity,
            'created_at' => now(),
            'updated_at' => now(),
            'status_aktif' => 'aktif',
        ]);

        return redirect()->route('images');
    } catch (\Exception $e) {
    // Log the error with full details
    Log::error('Error storing image: '.$e->getMessage(), ['exception' => $e]);

    // Optionally, you can return an error response
    return back()->withErrors(['message' => 'Error storing image']);
}
    }
    public function edit(int $id)
    {
        $images = images::where('id', $id)->first();
        return view('admin/images/crud/edit', compact('images'));
    }
    public function update(Request $request, int $id)
    {
        $foto_wisuda = $request->file('foto_wisuda') ? file_get_contents($request->file('foto_wisuda')->getRealPath()) : null;
        $foto_personal = $request->file('foto_personal') ? file_get_contents($request->file('foto_personal')->getRealPath()) : null;
        $foto_grup = $request->file('foto_grup') ? file_get_contents($request->file('foto_grup')->getRealPath()) : null;
        $foto_maternity = $request->file('foto_maternity') ? file_get_contents($request->file('foto_maternity')->getRealPath()) : null;

        $model = Images::where('id', $id)->first();
        $model->update([
            'foto_wisuda' => $foto_wisuda,
            'foto_personal' => $foto_personal,
            'foto_grup' => $foto_grup,
            'foto_maternity' => $foto_maternity,
            'updated_at' => now(),
            'status_aktif' => 'aktif'
        ]);
        return redirect()->route('images', $model->id);
    }
    public function history(){
        $images = images::where('status_aktif', '=', 'Nonaktif')->get();
        return view('admin/images/historyimages', compact('images'));
    }
    public function softdelete(int $id)
    {
        $images = images::where('id', '=', $id)->first();
        $images->status_aktif = 'Nonaktif';
        $images->save();

        return redirect()->route('images');
    }
    public function restore(int $id){
        $images = images::where('id', '=', $id)->first();
        $images->status_aktif = 'Aktif';
        $images->save();

        return redirect()->route('images.history');
    }
    public function delete(int $id)
    {
        $images = images::where('id', '=', $id)->first();
        $images->delete();

        return redirect()->route('images.history');
    }
}
