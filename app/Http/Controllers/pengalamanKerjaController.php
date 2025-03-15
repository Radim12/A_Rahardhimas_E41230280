<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//App\Http\Controllers\Controller;

class pengalamanKerjaController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function create()
    {
        $pengalaman_kerja = null;
        return view("create", compact("pengalaman_kerja"));
    }
    public function store(Request $request)
    {
        DB::table('pengalaman_kerja')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar
        ]);
        return redirect()->route('pengalaman_kerja.home')->with('success', 'Data pengalaman kerja baru telah berhasil disimpan.');
    }
}
