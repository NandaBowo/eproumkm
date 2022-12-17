<?php

namespace App\Controllers;

use App\Models\KasirModel;
use App\Models\StockModel;

class Kasir extends BaseController
{

    private $kasir;
    private $stock;
    // private $db;

    public function __construct()
    {
        $this->kasir = new KasirModel();
        $this->stock = new StockModel();
        // $this->db = db_connect();
    }

    public function index()
    {

        $result = $this->stock->where("id_user", session()->get("id"))->find();

        // dd($result);

        $join = $this->kasir->getGet()->getResult();
        $joinSum = $this->kasir->getSum()->getResult();

        $data = [
            "title" => "Halaman Kasir",
            "active" => "active",
            "name" => $result,
            "dataJoin" => $join,
            "joinSum" => $joinSum
        ];

        // dd($data);

        return view('kasir/index', $data);
    }

    public function input()
    {


        $tanggal = $this->request->getVar('tanggal');
        $id = $this->request->getVar('namaProduk');
        $kuantitas = $this->request->getVar('kuantitas');
        $status = $this->request->getVar('status');

        // $simpanan = $this->kasir->getGet()->getResult();

        $dataUser = [
            'id_barang' => $id,
            'quantity' => $kuantitas,
            'status' => $status,
            'status_bayar' => true,
            'tanggal' => $tanggal,
        ];

        $this->kasir->save($dataUser);

        // dd($result);



    }
}
