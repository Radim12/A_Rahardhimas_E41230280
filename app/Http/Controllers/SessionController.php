<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // Membuat session
    public function create(Request $request)
    {
        $request->session()->put('nama', 'Politeknik Negeri Jember');
        return "Data telah ditambahkan ke session.";
    }

    // Menampilkan isi session
    public function show(Request $request)
    {
        if ($request->session()->has('nama')) {
            return $request->session()->get('nama');
        } else {
            return 'Tidak ada data dalam session.';
        }
    }

    // Menghapus session
    public function delete(Request $request)
    {
        $request->session()->forget('nama');
        return "Data telah dihapus dari session.";
    }

    // Menampilkan view formulir
    public function formulir()
    {
        return view('formulir');
    }

    // Memproses data dari formulir
    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : " . $nama . ", Alamat : " . $alamat;
    }

    // Menampilkan nama dari parameter route
    public function indexNama($nama)
    {
        return $nama;
    }
}
