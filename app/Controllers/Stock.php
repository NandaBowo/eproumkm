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
            "dataQuery" => $this->stock->where("id_user", session()->get("id"))->find()
        ];

        // $dataQuery = $this->stock->where("id_barang", session()->get("id"))->find();

        return view("/stock/index", $data);
    }

    public function insert()
    {
        $dataInput = [
            "id_user" => $this->request->getVar("idUser"),
            "name" => $this->request->getVar("name"),
            "harga_beli" => $this->request->getVar("hargaBeli"),
            "harga_jual" => $this->request->getVar("hargaJual"),
            "barcode" => $this->request->getVar("barcode"),
            "stock" => $this->request->getVar("stock")
        ];
        // $iduser = $this->request->getVar("idBarang");
        // $name = $this->request->getVar("name");
        // $hargaBeli = $this->request->getVar("hargaBeli");
        // $hargaJual = $this->request->getVar("hargaJual");
        // $hargaGrosir = $this->request->getVar("hargaGrosir");

        $this->stock->save($dataInput);



        return redirect()->to('/stock');
    }

    public function addView()
    {
        $data = [
            "title" => "Halaman Tambah Stok",
            "active" => "active"
        ];

        return view('/stock/stock_form', $data);
    }

    public function stockFormEdit()
    {
        $data = [
            "title" => "Halaman Tambah Stok",
            "active" => "active"
        ];

        return view('/stock/stock_form_edit', $data);
    }
}
