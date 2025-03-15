<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiPendidikanController extends Controller
{
    // Method untuk mendapatkan semua data pendidikan
    public function getAll()
    {
        // Logika untuk mendapatkan semua data
        return response()->json(['message' => 'Get all data pendidikan']);
    }

    // Method untuk mendapatkan data pendidikan berdasarkan ID
    public function getPen($id)
    {
        // Logika untuk mendapatkan data berdasarkan ID
        return response()->json(['message' => 'Get data pendidikan by ID', 'id' => $id]);
    }

    // Method untuk menambahkan data pendidikan baru
    public function createPen(Request $request)
    {
        // Logika untuk menambahkan data baru
        return response()->json(['message' => 'Data pendidikan created']);
    }

    // Method untuk mengupdate data pendidikan berdasarkan ID
    public function updatePen(Request $request, $id)
    {
        // Logika untuk mengupdate data
        return response()->json(['message' => 'Data pendidikan updated', 'id' => $id]);
    }

    // Method untuk menghapus data pendidikan berdasarkan ID
    public function deletePen($id)
    {
        // Logika untuk menghapus data
        return response()->json(['message' => 'Data pendidikan deleted', 'id' => $id]);
    }
}
