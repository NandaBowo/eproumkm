<?php

namespace App\Controllers;

use App\Models\StockModel;

class Stock extends BaseController
{
    private $stock;

    public function __construct()
    {
        $this->stock = new StockModel();
    }

    public function index()
    {
        $data = [
            "title" => "Halaman Stock",
            "active" => "active",
            "dataQuery" => $this->stock->where("id_barang", session()->get("id"))->find()
        ];

        // $dataQuery = $this->stock->where("id_barang", session()->get("id"))->find();

        return view("/stock/index", $data);
    }

    public function insert()
    {
    }
}
