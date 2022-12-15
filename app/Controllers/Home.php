<?php

namespace App\Controllers;

use App\Models\StockModel;

class Home extends BaseController
{
    private $stock;

    public function __construct()
    {
        $this->stock = new StockModel();
    }

    public function index()
    {

        $data = [
            "title" => "Selamat datang di E-Promkm UNUSA",
            "active" => "active",
            "dataQuery" => $this->stock->where("id_barang", session()->get("id"))->find()
        ];

        return view('home', $data);
    }
}
