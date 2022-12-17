<?php

namespace App\Controllers;

use App\Models\KasirModel;

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
