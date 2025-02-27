<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class dhimasController extends Controller
{
    //memanggil view dari controller
    public function index() {
        return view('dhimas');
       }

       public function getNama($nama)
    {
        return $nama;
    }

    //mengambil inputan dari user

    public function pendaftaran()
    {
        return view('pendaftaran');
    }
    
    public function proses(Request $request)
{
    $nama = $request->nama;
    $alamat = $request->alamat;
    return 'Nama: '.$nama.', Alamat: '.$alamat;
}
}
