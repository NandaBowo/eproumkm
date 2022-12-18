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
                "dataQuery" => $this->stock->where("id_user", session()->get("id"))->orderBy("created_at", "desc")->find()
            ];
        } else {
            $data = [
                "title" => "Selamat datang di E-Promkm UNUSA",
                "active" => "active",
                "dataQuery" => $this->stock->orderBy("created_at", "desc")->findAll()
            ];
        }

        return view('home', $data);
    }

    public function search()
    {
        if (session()->get("loggedIn")) {
            if ($this->request->getVar("search")) {
                $data = [
                    "title" => "Selamat datang di E-Promkm UNUSA",
                    "active" => "active",
                    "dataQuery" => $this->stock->where("id_user", session()->get("id"))->like("name", $this->request->getVar("search"))->orderBy("created_at", "desc")->find()
                ];
            } else {
                $data = [
                    "title" => "Selamat datang di E-Promkm UNUSA",
                    "active" => "active",
                    "dataQuery" => $this->stock->where("id_user", session()->get("id"))->orderBy("created_at", "desc")->find()
                ];
            }
        } else {
            if ($this->request->getVar("search")) {
                $data = [
                    "title" => "Selamat datang di E-Promkm UNUSA",
                    "active" => "active",
                    "dataQuery" => $this->stock->like("name", $this->request->getVar("search"))->orderBy("created_at", "desc")->find()
                ];
            } else {
                $data = [
                    "title" => "Selamat datang di E-Promkm UNUSA",
                    "active" => "active",
                    "dataQuery" => $this->stock->orderBy("created_at", "desc")->findAll()
                ];
            }
        }

        return view('home', $data);
    }
}
