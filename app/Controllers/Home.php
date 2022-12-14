<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\StockModel;

class Home extends BaseController
{
    protected $stockModel;

    public function __construct()
    {
        $this->stockModel = new StockModel();
    }

    public function index()
    {
        $user = new UserModel();
        
        
        $us = $user->find();
        dd($us);
    }

    public function coba() {
        // insert data

        $this->stockModel->save([
            "name" => "Nasi Bakar",
            "harga_beli" => 10000,
            "harga_jual" => 10000,
            "barcode" => 2332,
            "stock" => 30
        ]);


        
        
        
    }
}
