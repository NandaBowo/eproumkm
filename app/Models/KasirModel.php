<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class KasirModel extends Model 
{
    protected $table = 'kasir';
    protected $allowedFields = ['quantity', 'tanggal', 'id_barang'];
    // protected $useTimestamps = true;

    public function getGet() {
        $query = $this->db->table('kasir')
        ->join('stock', 'kasir.id_barang = stock.id')
        ->where('status_bayar', 1)
        ->get();
        return $query;

        // select * from kasir join stock on kasir.id = stock.id;
    }


}