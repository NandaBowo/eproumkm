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
        $barang = $this->kasir->getDataStock($this->request->getVar("rekapBulan"), $this->request->getVar("rekapTahun"))->getResult();

        $data = [
            "title" => "Halaman Rekap Penjualan",
            "activeRecap" => "active",
            "dataStock" => $barang,
            "rekapBulan" => $this->request->getVar("rekapBulan"),
            "rekapTahun" => $this->request->getVar("rekapTahun")
        ];

        return view('rekap/index', $data);
    }
}
