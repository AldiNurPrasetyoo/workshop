<?php

namespace App\Http\Controllers;

use App\Models\mekanik;
use Illuminate\Http\Request;

class mekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mekanik::get();
        return view('mekanik.tampilMekanik',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mekanik.tambahMekanik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new mekanik();
        $data -> nama_mekanik = $request -> nama_mekanik;
        $data -> tgl_lahir = $request ->tgl_lahir ;
        $data -> alamat = $request -> alamat;
        $data -> nik = $request -> nik;
        $data -> no_hp = $request -> no_hp;
        $data ->save();
        return redirect('mekanik');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = mekanik::where('id_mekanik', '=', $id)->get();
        return view('mekanik.editMekanik', compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = mekanik::where('id_mekanik', '=',$id);
        $data->update([
         'nama_mekanik'=>$request->nama_mekanik,
         'tgl_lahir'=>$request->tgl_lahir,
         'alamat'=>$request->alamat,
         'nik'=>$request->nik,
         'no_hp'=>$request->no_hp,        
        ]);
        return redirect('mekanik');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = mekanik::where('id_mekanik','=', $id);
        $data->delete();
        return redirect('mekanik');
    }
}
