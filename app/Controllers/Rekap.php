<?php

namespace App\Controllers;

use App\Models\KasirModel;
use App\Models\StockModel;
use DateTime;

class Rekap extends BaseController
{
    private $dataStock;
    private $datetime;
    private $kasir;

    public function __construct()
    {
        $this->dataStock = new StockModel();
        $this->datetime = new DateTime();
        $this->kasir = new KasirModel();
    }

    public function index()
    {
        $dataStock = $this->dataStock->like("created_at", $this->datetime->format("Y-m-d "))->find();
        $barang = $this->kasir->getDataStock()->getResult();

        $data = [
            "title" => "Halaman Rekap Penjualan",
            "active" => "active",
            "dataStock" => $barang
        ];

        return view('rekap/index', $data);
    }
}
