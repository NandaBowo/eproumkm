<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\StockModel;

class Auth extends BaseController
{
    protected $userModel;
    private $session;
    private $stock;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->userModel = new UserModel();
        $this->stock = new StockModel();
        $this->session = session();
    }

    public function login()
    {
        $data = [
            "title" => "Login Page"
        ];

        return view('auth/login', $data);
    }

    public function log()
    {
        $email = $this->request->getVar('email');
        $pass = $this->request->getVar("pass");

        $user = $this->userModel->where('email', $email)->first();

        if ($user) {
            $data = $this->userModel->where('email', $email)->first();

            $auth = password_verify($pass, $data['password']);
            if ($auth) {
                // dd($auth);
                $sessionData = [
                    "id" => $data["id"],
                    "name" => $data["name"],
                    "email" => $data["email"],
                    "loggedIn" => true
                ];

                $this->session->set($sessionData);

                $dataPass = [
                    "title" => "Selamat Datang | E-ProMKM",
                    "dataQuery" => $this->stock->where("id_user", session()->get("id"))->find()
                ];

                return view("home", $dataPass);
            } else {
                return redirect()->back()->with("error", "Email/Password salah");
            }
        } else {
            return redirect()->back()->with("error", "Email/Password salah");
        }
    }


    // ======================================================================

    public function register()
    {
        $data = [
            "title" => "Register Page"
        ];

        return view('auth/register', $data);
    }

    public function regis()
    {
        $pass1 = $this->request->getVar("pass1");
        $pass2 = $this->request->getVar("pass2");

        if ($pass1 == $pass2) {
            $data = [
                "name" => $this->request->getVar("name"),
                "email" => $this->request->getVar("email"),
                "hp" => $this->request->getVar("hp"),
                "umkm" => $this->request->getVar("umkm"),
                "password" => password_hash($pass1, PASSWORD_DEFAULT)
            ];

            $this->userModel->save($data);

            return redirect()->to('/auth/login');
        } else {
            $data = [
                "title" => "Register Page"
            ];

            return view('auth/register', $data);
        }
    }

    public function logout()
    {
        session()->remove("id");
        session()->remove("name");
        session()->remove("email");
        session()->remove("loggedIn");

        return redirect()->to("/");
    }
}
