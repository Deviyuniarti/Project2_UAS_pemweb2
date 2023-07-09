@extends('template.index')

@section('content')
    <div class="container-fluid px-2" style="color: #0e0012">
        <h2 class="mt-2">Inventaris Restoran</h2>
        <div class="d-flex justify-content-between mb-1">
            <ol class="breadcrumb"
                style="color: blue; border: none; padding: 7px; width: 110px; height: 40px; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center;">
                <li class="breadcrumb-item">Data Inventaris </a></li>
            </ol>
            <a href="/inventaris_restoran/create" class="btn btn-primary"
            style="background: linear-gradient(to right, #8E24AA, #42A5F5); color: #fff; border: none; padding: 7px 15px; width: auto; height: 40px; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-plus"> Tambah Inventaris Restoran</i>
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" style="border: 1px solid #fff;">
                        <thead>
                            <tr style="color: black">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Jumlah Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataInventaris as $Inventaris)
                                <tr style="color: black">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Inventaris->nama }}</td>
                                    <td>{{ $Inventaris->kode }}</td>
                                    <td>{{ $Inventaris->jumlah_barang }}</td>

                                    <td>
                                        <a href="/inventaris_restoran/view/{{ $Inventaris->id }}" class="btn btn-primary"><i
                                            class="fas fa-eye"></i> View</a>
                                        <a href="/inventaris_restoran/edit/{{ $Inventaris->id }}" class="btn btn-warning"><i
                                                class="fas fa-edit"></i> Edit</a>
                                        <a href="/inventaris_restoran/delete/{{ $Inventaris->id }}" class="btn btn-danger"
                                            onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus data ini?')) { document.getElementById('delete-form-{{ $Inventaris->id }}').submit(); }"><i
                                                class="fas fa-trash"></i> Hapus</a>
                                        <form id="delete-form-{{ $Inventaris->id }}"
                                            action="/inventaris_restoran/delete/{{ $Inventaris->id }}" method="POST"
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
