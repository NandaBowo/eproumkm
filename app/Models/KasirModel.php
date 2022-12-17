<?php

namespace App\Models;

use App\Controllers\Stock;
use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class KasirModel extends Model
{
    protected $table = 'kasir';
    protected $allowedFields = ['quantity', 'tanggal', 'id_barang', 'status_bayar', 'status'];
    // protected $useTimestamps = true;

    public function getGet()
    {
        $query = $this->db->table('kasir')
            ->select("tanggal, name, harga_jual, quantity, status")
            ->join('stock', 'kasir.id_barang = stock.id')
            ->where('status_bayar', 1)
            ->get();
        return $query;

        // select * from kasir join stock on kasir.id = stock.id;
    }

    public function getSum()
    {
        $query = $this->db->table('kasir')
            ->select("sum(harga_jual * quantity) as total_seluruh")
            ->join('stock', 'kasir.id_barang = stock.id')
            ->where('status_bayar', 1)
            ->get();
        return $query;

        // select * from kasir join stock on kasir.id = stock.id;
    }

    public function getSales() {
        $query = $this->db->table('kasir')
            ->select("tanggal, name, quantity, status")
            ->join('stock', 'kasir.id_barang = stock.id')
            ->get();

            return $query;
    }
}
