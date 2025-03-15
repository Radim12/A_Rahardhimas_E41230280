<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    // Menampilkan halaman upload
    public function upload()
    {
        return view('upload');
    }

    // Proses upload file
    public function proses_upload(Request $request)
    {
        // Validasi input
        $request->validate([
            'file' => 'required|file|max:2048', // Maksimal 2MB
            'keterangan' => 'required|string',
        ]);

        // Menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        // Informasi file
        $fileInfo = [
            'file_name' => $file->getClientOriginalName(),
            'file_extension' => $file->getClientOriginalExtension(),
            'file_size' => $file->getSize(),
            'file_mime_type' => $file->getMimeType(),
        ];

        // Tujuan upload
        $tujuan_upload = 'data_file';

        // Upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        // Redirect dengan pesan sukses dan informasi file
        return redirect()->route('upload')
            ->with('success', 'File berhasil diupload!')
            ->with('fileInfo', $fileInfo);
    }
    public function dropzone()
    {
        return view('dropzone'); // Pastikan view 'dropzone.blade.php' ada
    }

    public function dropzoneStore(Request $request)
    {
        // Logika untuk menyimpan file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->store('file_dropzone/dropzone'); // Simpan file ke folder 'dropzo'
            return response()->json(['success' => 'File uploaded successfully.']);
        }
        return response()->json(['error' => 'File not found.']);
    }
    // Method untuk menampilkan halaman upload PDF
    public function pdf_upload()
    {
        return view('pdf_upload');
    }

    // Method untuk menyimpan file PDF
    public function pdf_store(Request $request)
    {
        $pdf = $request->file('file');
        $pdfName = 'pdf_' . time() . '.' . $pdf->getClientOriginalExtension();
        $pdf->move(public_path('pdf/dropzone'), $pdfName);
        return response()->json(['success' => $pdfName]);
    }
}
