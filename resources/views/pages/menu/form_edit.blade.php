@extends('template.index')

@section('content')
    <div class="container-fluid px-2">
        <h2 class="mt-2">Edit Menu</h2>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Menu</li>
            </ol>
            <a href="/menu" class="btn btn-warning btn-sm" style="height: 40px;">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/menu/update/{{ $menuData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_menu">Menu</label>
                        <input type="text" name="nama_menu" id="nama_menu" class="form-control"
                            value="{{ $menuData->nama_menu }}" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control"
                            value="{{ $menuData->harga }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control"
                            value="{{ $menuData->kontak }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_menu_id">Kategori Menu ID</label>
                        <input type="text" name="kategori_menu_id" id="kategori_menu_id" class="form-control"
                            value="{{ $menuData->kategori_menu_id }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
