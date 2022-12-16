<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Session\Session;

class Auth extends BaseController
{
    protected $userModel;
    private $session;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->userModel = new UserModel();
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

        // dd($user);

        if ($user) {
            $data = $this->userModel->where('email', $email)->first();

            if ($data['password'] == $pass) {

                $sessionData = [
                    "id" => $data["id"],
                    "name" => $data["name"],
                    "email" => $data["email"],
                    "loggedIn" => true
                ];

                $this->session->set($sessionData);

                // dd($this->session->get("loggedIn"));

                dd($data);

                return view('home', $data);
            } else {
                return false;
            }
        } else {
            return false;
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
                "password" => $this->request->getVar("pass1")
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
