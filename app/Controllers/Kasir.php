<?php

namespace App\Controllers;

class Kasir extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Halaman Kasir",
            "active" => "active"
        ];

        return view('kasir/index', $data);
    }
}
