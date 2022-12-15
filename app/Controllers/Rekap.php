<?php

namespace App\Controllers;

class Rekap extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Halaman Rekap Penjualan",
            "active" => "active"
        ];

        return view('rekap/index', $data);
    }
}
