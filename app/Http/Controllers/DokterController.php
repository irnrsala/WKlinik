<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::All();
        return view('dokter.dDokter',compact('dokter'));
    }

    public function create()
    {
        $dokter = Dokter::all();
        return view('dokter.tDokter',compact('dokter'));
    }

    public function store(Request $request)
    {
        Dokter::create([
            'nama' => $request->input('nama'),
            'spesialis' =>$request->input('spesialis'),
            'alamat' => $request->input('alamat'),
            'telp' => $request->input('telp'),
            'tanggalMulai' =>$request->input('tglMulai'),
            'foto' => $request->input('foto'),
            'status' => 'aktif'
        ]);

        return view('dokter.dDokter');
    }

    public function edit(dokter $id)
    {
        $data = Dokter::all();
        return view('dokter.eDokter', ['data'=> $id]);
    }

    public function update()
    {
        
    }

}
