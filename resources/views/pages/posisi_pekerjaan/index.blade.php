@extends('template.index')

@section('content')
    <div class="container-fluid px-2" style="color: black">
        <h2 class="mt-2">Posisi Pekerjaan</h2>
        <div class="d-flex justify-content-between mb-1">
            <ol class="breadcrumb" style="color: blue; border: none; padding: 7px; width: 150px; height: 40px; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center;">
                <li class="breadcrumb-item">Posisi pekerjaan</a></li>
            </ol>            
            <a href="/posisi_pekerjaan/create" class="btn btn-primary"
            style="background: linear-gradient(to right, #8E24AA, #42A5F5); color: #fff; border: none; padding: 7px 15px; width: auto; height: 40px; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-plus"> Tambah Posisi Pekerjaan</i>
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" style="border: 1px solid #fff;">
                        <thead>
                            <tr style="color: black">
                                <th>No</th>
                                <th>Nama Posisi Pekerjaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataposisi as $nama_posisi)
                                <tr style="color: black">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $nama_posisi->nama_posisi }}</td>
                                    <td>
                                        <a href="/posisi_pekerjaan/view/{{ $nama_posisi->id }}" class="btn btn-primary"><i
                                            class="fas fa-eye"></i> View</a>
                                        <a href="/posisi_pekerjaan/edit/{{ $nama_posisi->id }}" class="btn btn-warning"><i
                                                class="fas fa-edit"></i> Edit</a>
                                        <a href="/posisi_pekerjaan/delete/{{ $nama_posisi->id }}" class="btn btn-danger"
                                            onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus data ini?')) { document.getElementById('delete-form-{{ $nama_posisi->id }}').submit(); }"><i
                                                class="fas fa-trash"></i> Hapus</a>
                                        <form id="delete-form-{{ $nama_posisi->id }}"
                                            action="/posisi_pekerjaan/delete/{{ $nama_posisi->id }}" method="POST"
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
