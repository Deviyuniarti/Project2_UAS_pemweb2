@extends('template.index')

@section('content')
    <div class="container-fluid px-2">
        <h2 class="mt-2">Edit Posisi Pekerjaan</h2>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Posisi Pekerjaan</li>
            </ol>
            <a href="/posisi_pekerjaan" class="btn btn-warning btn-sm" style="height: 40px;">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/posisi_pekerjaan/update/{{ $dataPosisi->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_posisi">Nama Posisi</label>
                        <input type="text" name="nama_posisi" id="nama_posisi" class="form-control"
                            value="{{ $dataPosisi->nama_posisi }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
