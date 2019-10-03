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
            @for($i = 0; $i < 10; $i++)
                <tr>
                    <td>No</td>
                    <td>Nama Barang</td>
                    <td>Harga Barang</td>
                    <td>Stock</td>
                    <td>Kategori</td>
                    <td>Aksi</td>
                </tr>
            @endfor
        </tbody>
    </table>

@endsection