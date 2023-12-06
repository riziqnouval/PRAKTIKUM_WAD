<?php

namespace App\Http\Controllers;

use App\Models\showroom_mobil;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create()
    {
        return view("showroom_create");

    }
    public function store(Request $request)
    {
        showroom_mobil::create([
            'nama_mobil' => $request -> nama,
            'brand_mobil' => $request -> brand,
            'warna_mobil' => $request -> warna,
            'tipe_mobil' => $request -> tipe,
            'harga_mobil' => $request -> harga,
        ]);
        return redirect()->route('showroom_index');
    }
    public function update(Request $request, $id)
    {
        $showroom = showroom_mobil::all();
        return view('showroom_index', compact('showroom'));
    }
    public function destroy($id)
    {

    }

}
