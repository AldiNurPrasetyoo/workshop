<?php

namespace App\Http\Controllers;

use App\Models\jenis_kendaraan;
use Illuminate\Http\Request;

class jenis_kendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jenis_kendaraan::get();
        //dd($data);
        return view('jenis-kendaraan.tampilJenisKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis-kendaraan.tambahJenisKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = new jenis_kendaraan();
         $data->nama_jenis_kendaraan = $request->nama_jenis_kendaraan;
         $data->save();
         return redirect('jenis-kendaraan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = jenis_kendaraan::where('id_jenis_kendaraan', '=', $id)->get();
        return view('jenis-kendaraan.editJenisKendaraan', compact('data','id'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = jenis_kendaraan::where('id_jenis_kendaraan', '=',$id);
        $data->update([
            'nama_jenis_kendaraan'=>$request->nama_jenis_kendaraan,
        ]);
        return redirect('jenis-kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = jenis_kendaraan::where('id_jenis_kendaraan','=', $id);
        $data->delete();
        return redirect('jenis-kendaraan');
    }
}
