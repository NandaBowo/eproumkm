<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $user = new UserModel;

        $us = $user->find();
        dd($us);
    }
}
