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
        // $query = $this->kasir // dari sini
        // ->where('id_user', $id)
        // ->where('tanggal', $this->datetime->format("Y-m-d"))
        // ->find(); // sampai sini perlu dirubah
        // $namaBarang = $this->stock->where('id_user', $id)->find();

        // dd($this->kasir->getSales()->getResult());
        $barang = $this->kasir->getSales($this->request->getVar("tanggal"))->getResult();

        // dd($query);

        $data = [
            "title" => "Halaman Sales",
            "active" => "active",
            "barang" => $barang,
            "tanggalValue" => $this->request->getVar("tanggal")
        ];

        return view('sales/index', $data);
    }
}
