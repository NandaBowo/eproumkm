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

        $data = $this->stock->findAll();
    }

    public function insert()
    {
        $data = [
            "id_user" => $this->request->getVar("idBarang"),
            "name" => $this->request->getVar("name"),
            "harga_beli" => $this->request->getVar("hargaBeli"),
            "harga_jual" => $this->request->getVar("hargaJual"),
            "barcode" => $this->request->getVar("barcode")
        ];
        // $iduser = $this->request->getVar("idBarang");
        // $name = $this->request->getVar("name");
        // $hargaBeli = $this->request->getVar("hargaBeli");
        // $hargaJual = $this->request->getVar("hargaJual");
        // $hargaGrosir = $this->request->getVar("hargaGrosir");

        $this->stock->save($data);
        return redirect()->to('/stock');
    }
}
