@extends('layout')

@section('konten')
<div class="row">
    <div class="col-md-6">
        <h2>Tambah Pengalaman Kerja</h2>
        <form method="POST" action="{{ route('pengalaman-kerja.store') }}">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tahun Masuk</label>
                <input type="number" name="tahun_masuk" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tahun Keluar</label>
                <input type="number" name="tahun_keluar" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('home') }}" class="btn btn-default">Kembali</a>
        </form>
    </div>
</div>
@endsection