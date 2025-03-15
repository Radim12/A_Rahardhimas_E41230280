@extends('layout')

@section('konten')
    <!-- Tombol Tambah Data -->
    <a href="{{ route('pengalaman-kerja.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <!-- Tabel Pengalaman Kerja -->
    <h2>Pengalaman Kerja</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tahun Masuk</th>
                <th>Tahun Keluar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengalamanKerja as $pengalaman)
            <tr>
                <td>{{ $pengalaman->id }}</td>
                <td>{{ $pengalaman->nama }}</td>
                <td>{{ $pengalaman->jabatan }}</td>
                <td>{{ $pengalaman->tahun_masuk }}</td>
                <td>{{ $pengalaman->tahun_keluar }}</td>
                <td>
                    <a href="{{ route('pengalaman-kerja.edit', $pengalaman->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pengalaman-kerja.destroy', $pengalaman->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection