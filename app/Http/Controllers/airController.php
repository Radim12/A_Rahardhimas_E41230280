<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class airController extends Controller
{
    //passing data dari controller ke view
    public function index()
    {
        $nama = 'www.dhimas.com';
        return view('air', ['nama' => $nama]);
    }

    public function biodata()
       {
           $nama = 'www.dhimas.com';
           $mata_pelajaran = ['Laravel', 'Pemrograman Web'];
           return view('biodata', ['nama' => $nama, 'mapel' => $mata_pelajaran]);
       }
}
