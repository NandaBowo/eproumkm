<?php

namespace App\Models;

use App\Controllers\Stock;
use CodeIgniter\Database\Query;
use CodeIgniter\Model;
use DateTime;

class KasirModel extends Model
{
    protected $table = 'kasir';
    protected $allowedFields = ['quantity', 'tanggal', 'id_barang', 'status_bayar', 'status', 'id_user'];
    // protected $useTimestamps = true;

    public function getGet()
    {
        $id = session()->get('id');
        // dd($id);
        $query = $this->db->table('kasir')
            ->select("tanggal, name, harga_jual, quantity, status, kasir.id_user")
            ->join('stock', 'kasir.id_barang = stock.id')
            ->where('status_bayar', 1)
            ->where('kasir.id_user', $id)
            ->get();
        return $query;

        // select * from kasir join stock on kasir.id = stock.id;
    }

    public function getSum()
    {
        $id = session()->get('id');
        $query = $this->db->table('kasir')
            ->select("sum(harga_jual * quantity) as total_seluruh")
            ->join('stock', 'kasir.id_barang = stock.id')
            ->where('status_bayar', 1)
            ->where('kasir.id_user', $id)
            ->get();
        return $query;

        // select * from kasir join stock on kasir.id = stock.id;
    }

    public function getSales() {
        $id = session()->get('id');
        $date = new DateTime();
        // dd($date);
        $query = $this->db->table('kasir')
            ->select("name, quantity, tanggal, sum(quantity) as total")
            ->join('stock', 'kasir.id_barang = stock.id')
            ->where('tanggal', $date->format('Y-m-d'))
            ->where('kasir.id_user', $id)
            ->groupBy('name')
            ->get();
        return $query;
    }
}
