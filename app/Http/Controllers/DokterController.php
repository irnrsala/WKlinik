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

    public function tambah()
    {
        return view('dokter.tDokter');
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

        return redirect()->route('dokter');
    }
}
