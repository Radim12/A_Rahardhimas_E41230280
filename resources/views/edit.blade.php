@extends('layout')

@section('konten')
<div class="row">
    <div class="col-md-6">
        <h2>Edit Pengalaman Kerja</h2>
        <form method="POST" action="{{ route('pengalaman-kerja.update', $pengalaman->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $pengalaman->nama }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" value="{{ $pengalaman->jabatan }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tahun Masuk</label>
                <input type="number" name="tahun_masuk" value="{{ $pengalaman->tahun_masuk }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tahun Keluar</label>
                <input type="number" name="tahun_keluar" value="{{ $pengalaman->tahun_keluar }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('home') }}" class="btn btn-default">Kembali</a>
        </form>
    </div>
</div>
@endsection