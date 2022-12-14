<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            "title" => "Login Page"
        ];

        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            "title" => "Register Page"
        ];

        return view('auth/register', $data);
    }
}
