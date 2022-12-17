<?php

namespace App\Controllers;

use App\Models\KasirModel;
use App\Models\StockModel;
use DateTime;

class Sales extends BaseController
{

    private $kasir;
    private $stock;
    private $datetime;

    public function __construct()
    {
        $this->kasir = new KasirModel();
        $this->stock = new StockModel();
        $this->datetime = new DateTime();
    }

    public function index()
    {

        
        $id = session()->get('id');
        $query = $this->kasir // dari sini
        ->where('id_user', $id)
        ->where('tanggal', $this->datetime->format("Y-m-d"))
        ->find(); // sampai sini perlu dirubah
        $namaBarang = $this->stock->where('id_user', $id)->find();


        // dd($query);

        $data = [
            "title" => "Halaman Sales",
            "active" => "active",
            "barang" => $namaBarang
        ];

        return view('sales/index', $data);
    }

    
}
