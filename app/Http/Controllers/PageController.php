<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function profil()
    {
        return view('profil');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function kirimLayanan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|digits:16',
            'alamat' => 'required',
            'jenis_surat' => 'required',
        ]);

        return back()->with('success', 'Pengajuan berhasil dikirim.');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
