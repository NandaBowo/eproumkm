<?php

namespace App\Controllers;

class Sales extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Halaman Sales",
            "active" => "active"
        ];

        return view('sales/index', $data);
    }
}
