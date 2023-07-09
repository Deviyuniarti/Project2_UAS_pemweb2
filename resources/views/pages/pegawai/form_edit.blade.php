@extends('template.index')

@section('content')
    <div class="container-fluid px-2">
        <h2 class="mt-2">Edit Pegawai</h2>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Pegawai</li>
            </ol>
            <a href="/pegawai" class="btn btn-warning btn-sm" style="height: 40px;">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/pegawai/update/{{ $dataPegawai->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            value="{{ $dataPegawai->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="number" name="nip" id="nip" class="form-control"
                            value="{{ $dataPegawai->nip }}" required>
                    </div>
                    <div class="form-group">
                        <label for="posisi_pekerjaan_id">Posisi Pekerjaan ID</label>
                        <input type="number" name="posisi_pekerjaan_id" id="posisi_pekerjaan_id" class="form-control"
                            value="{{ $dataPegawai->posisi_pekerjaan_id }}" required>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="number" name="kontak" id="kontak" class="form-control"
                            value="{{ $dataPegawai->kontak }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control"
                            value="{{ $dataPegawai->alamat }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
