<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {

        $dataProduk = [
            [
                "id"    =>  1,
                "nama"  =>  "Kaos",
                "kategori"  =>  1,
                "stock" =>  50,
                "harga" =>  50000
            ],
            [
                "id"    =>  2,
                "nama"  =>  "Bola",
                "kategori"  =>  1,
                "stock" =>  90,
                "harga" =>  100000
            ],
            [
                "id"    =>  1,
                "nama"  =>  "Raket",
                "kategori"  =>  2,
                "stock" =>  50,
                "harga" =>  250000
            ]
        ];

        return view('app.manajemen-produk.index',
                    ["dataProduk"=>$dataProduk]);
    }
}
