<?php

namespace App\Controllers;

use App\Models\StockModel;

class Stock extends BaseController
{
    private $stock;

    public function __construct()
    {
        $this->stock = new StockModel();
    }

    public function index() {

        $data = $this->stock->findAll();

    }

    public function insert() {
        
    }
}