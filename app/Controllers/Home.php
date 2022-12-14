<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Selamat datang di E-Promkm UNUSA"
        ];

        return view('home', $data);
    }
}
