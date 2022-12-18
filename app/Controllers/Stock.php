<?php

namespace App\Controllers;

use App\Models\StockModel;
use BadFunctionCallException;

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

        // $dataQuery = $this->stock->where("id_user", session()->get("id"))->find();
        // dd($dataQuery);

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

    public function stockFormEdit($id)
    {
        $user = $this->stock->where("id", $id)->first();

        // dd($user);
        // $user["id"];

        $data = [
            "title" => "Halaman Tambah Stok",
            "active" => "active",
            "id" => $user["id"],
            "id_user" => $user["id_user"],
            "namaBarang" => $user["name"],
            "hargaBeli" => $user["harga_beli"],
            "hargaJual" => $user["harga_jual"],
            "barcode" => $user["barcode"],
            "stock" => $user["stock"]
        ];

        // dd($data);

        // dd($this->stock->where("id_user", session()->get("id"))->first());

        return view('/stock/stock_form_edit', $data);
    }

    public function update()
    {
        // dd($this->request->getVar("idUser"));

        $inputForm = [
            'id' => $this->request->getVar('idUser'),
            'id_user' => $this->request->getVar('idUser2'),
            'name' => $this->request->getVar('namaBarang'),
            'harga_beli' => $this->request->getVar('hargaBeli'),
            'harga_jual' => $this->request->getVar('hargaJual'),
            // 'barcode' => $this->request->getVar('barcode'),
            'stock' => $this->request->getVar('stock')
        ];

        // dd($inputForm);

        $this->stock->save($inputForm);

        return redirect()->to('/stock');
    }
}
