<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    // Method untuk menampilkan form tambah user
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    // Method untuk menyimpan data user baru
    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    // Method untuk menampilkan detail user berdasarkan ID
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }

    // Method untuk menampilkan form edit user berdasarkan ID
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }

    // Method untuk mengupdate data user berdasarkan ID
    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }

    // Method untuk menghapus data user berdasarkan ID
    public function destroy($id)
    {
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
    }
}
