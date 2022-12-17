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
        if (session()->get("loggedIn")) {
            $data = [
                "title" => "Selamat datang di E-Promkm UNUSA",
                "active" => "active",
                "dataQuery" => $this->stock->where("id_user", session()->get("id"))->find()
            ];
        } else {
            $data = [
                "title" => "Selamat datang di E-Promkm UNUSA",
                "active" => "active",
                "dataQuery" => $this->stock->findAll()
            ];
        }

        return view('home', $data);
    }
}
