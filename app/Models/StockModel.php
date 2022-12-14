<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{

    protected $table = 'stock';
    protected $allowedFields = ['name', 'harga_beli', 'harga_jual', 'barcode', 'stock'];

}