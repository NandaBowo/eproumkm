<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Selamat datang di E-Promkm UNUSA",
            "active" => "active"
        ];

        return view('home', $data);
    }

    public function kasir()
    {
        $data = [
            "title" => "Halaman Kasir",
            "active" => "active"
        ];

        return view('kasir/index', $data);
    }

    public function sales()
    {
        $data = [
            "title" => "Halaman Sales",
            "active" => "active"
        ];

        return view('sales/index', $data);
    }

    public function stock()
    {
        $data = [
            "title" => "Halaman Stok",
            "active" => "active"
        ];

        return view('stock/index', $data);
    }

    public function stockForm()
    {
        $data = [
            "title" => "Halaman Tambah Barang",
            "active" => "active"
        ];

        return view('stock/stock_form', $data);
    }

    public function rekap()
    {
        $data = [
            "title" => "Halaman Rekap Penjualan",
            "active" => "active"
        ];

        return view('rekap/index', $data);
    }
}
