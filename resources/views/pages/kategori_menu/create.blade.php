@extends('template.index')

@section('content')
    <div class="container-fluid px-2">
        <h2 class="mt-2">Tambah Kategori Menu</h2>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Kategori <Menu></Menu></li>
            </ol>
            <a href="/kategori_menu" class="btn btn-warning btn-sm" style="height: 40px;" >
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/kategori_menu/simpan-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kategori">Nama kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
