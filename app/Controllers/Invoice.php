<?php

namespace App\Controllers;

use App\Models\KasirModel;
use App\Models\UserModel;

class Invoice extends BaseController
{
    private $kasir;
    private $user;

    public function __construct()
    {
        $this->kasir = new KasirModel();
        $this->user = new UserModel();
    }

    public function index()
    {
        $join = $this->kasir->getGet()->getResult();
        $joinSum = $this->kasir->getSum()->getResult();
        $joinFirst = $this->kasir->getFirst()->getFirstRow();
        $user = $this->user->where("id", session()->get("id"))->first();

        $data = [
            "title" => "Halaman Kasir",
            "active" => "active",
            "dataJoin" => $join,
            "joinSum" => $joinSum,
            "joinFirst" => $joinFirst,
            "user" => $user
        ];

        return view("invoice/index", $data);
    }

    public function kembaliHapus()
    {
        $this->kasir->whereIn('status_bayar', [1])
            ->set(['status_bayar' => false])
            ->update();

        return redirect()->to('/');
    }
}
