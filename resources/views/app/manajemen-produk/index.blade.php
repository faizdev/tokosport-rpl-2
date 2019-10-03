@extends('layouts.main')

@section('page-title')
    CRUD Produk
@endsection

@section('page-content')

    <table border="1">
        
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stock</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($dataProduk as $produk)
                <tr>
                    <td>No</td>
                    <td>{{ $produk['nama'] }}</td>
                    <td>Harga Barang</td>
                    <td>Stock</td>
                    <td>Kategori</td>
                    <td>Aksi</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection