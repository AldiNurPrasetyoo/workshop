<?php

namespace App\Http\Controllers;

use App\Models\jenis_service;
use Illuminate\Http\Request;

class jenis_serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jenis_service::get();
        //dd($data);
        return view('jenis-service.tampilJenisService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis-service.tambahJenisService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new jenis_service();
         $data->jenis_service = $request->jenis_service;
         $data->keterangan = $request->keterangan;
         $post = $data->save();
         return redirect('jenis-service');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = jenis_service::where('id_jenis_service', '=', $id)->get();
        return view('jenis-service.editJenisService', compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = jenis_service::where('id_jenis_service', '=',$id);
        $data->update([
            'jenis_service'=>$request->jenis_service,
            'keterangan'=>$request->keterangan,
        ]);
        return redirect('jenis-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = jenis_service::where('id_jenis_service','=', $id);
        $data->delete();
        return redirect('jenis-service');
    }
}
