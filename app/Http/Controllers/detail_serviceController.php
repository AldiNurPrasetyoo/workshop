<?php

namespace App\Http\Controllers;

use App\Models\detail_service;
use Illuminate\Http\Request;

class detail_serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = detail_service::get();
        //dd($data);
        return view('detail-service.tampilDetailService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detail-service.tambahDetailService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //untuk menyimpan
         $data = new detail_service();
         $data->sparepart = $request->sparepart;
         $data->harga = $request->harga;
         $data->save();
         return redirect('detail-service');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = detail_service::where('id_detail_service', '=', $id)->get();
        return view('detail-service.editDetailService', compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = detail_service::where('id_detail_service', '=',$id);
        $data->update([
            'sparepart'=>$request->sparepart,
            'harga'=>$request->harga,
        ]);
        return redirect('detail-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = detail_service::where('id_detail_service','=', $id);
        $data->delete();
        return redirect('detail-service');
    }
}
