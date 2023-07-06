@extends('template.index')

@section('content')
    <div class="container-fluid px-2">
        <h2 class="mt-2">Menu</h2>
        <div class="d-flex justify-content-between mb-1">
            <ol class="breadcrumb"
                style=" #fff; border: none; padding: 7px; width: 90px; height: 40px; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center;">
                <li class="breadcrumb-item active">Data Menu</li>
            </ol>
            <a href="/menu/create" class="btn btn-primary"
                style="background: linear-gradient(to right, #8E24AA, #42A5F5); color: #fff; border: none; padding: 7px; width: 90px; height: 40px; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-plus"> Tambah Menu</i>
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" style="border: 1px solid #fff;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu</th>
                                <th>Harga</th>
                                <th>Kontak</th>
                                <th>Kategori Nama ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menuData as $menu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $menu->nama_menu }}</td>
                                    <td>{{ $menu->harga }}</td>
                                    <td>{{ $menu->kontak }}</td>
                                    <td>{{ $menu->kategori_menu_id }}</td>
                                    <td>
                                        <a href="/menu/edit/{{ $menu->id }}" class="btn btn-warning"><i
                                                class="fas fa-edit"></i> Edit</a>
                                        <a href="/menu/delete/{{ $menu->id }}" class="btn btn-danger"
                                            onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus data ini?')) { document.getElementById('delete-form-{{ $menu->id }}').submit(); }"><i
                                                class="fas fa-trash"></i> Hapus</a>
                                        <form id="delete-form-{{ $menu->id }}"
                                            action="/menu/delete/{{ $menu->id }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
