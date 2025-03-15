<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function index($nama)
    {
        return $nama;
    }

    // Memproses data dari formulir
    public function proses(Request $request)
    {
        // Validasi input (opsional)
        $request->validate([
            'nama' => 'required|string|min:5',
            'alamat' => 'required|string|min:5',
        ]);

        // Mengambil data dari request
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        // Mengembalikan response
        return "Nama : $nama, Alamat : $alamat";
    }
}
