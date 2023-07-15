@extends('template.index')

@section('content')
    <div class="container-fluid px-2" style="color: black">
        <h2 class="mt-2">Daftar Pesanan</h2>
        <!-- ... kode lainnya ... -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" style="border: 1px solid #fff;">
                    <thead>
                        <tr style="color: black">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Menu</th>
                            <th>Drink</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr style="color: black">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->menu }}</td>
                                <td>{{ $order->drink }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>
                                    <a href="/pesanan/view/{{ $order->id }}" class="btn btn-primary"><i
                                            class="fas fa-eye"></i> View</a>
                                    <a href="/pesanan/delete/{{ $order->id }}" class="btn btn-danger"
                                        onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus data ini?')) { document.getElementById('delete-form-{{ $order->id }}').submit(); }"><i
                                            class="fas fa-trash"></i> Hapus</a>
                                    <form id="delete-form-{{ $order->id }}" action="/pesanan/delete/{{ $order->id }}"
                                        method="POST" style="display: none;">
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
@endsection
