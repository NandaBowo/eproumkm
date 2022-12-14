<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
        
    }

    public function login()
    {
        $data = [
            "title" => "Login Page"
        ];

        return view('auth/login', $data);
    }

    public function log() {
        $email = $this->request->getVar('email');
        $pass = $this->request->getVar("pass");

        if($this->userModel->where('email', $email)->find()){
            $data = $this->userModel->where('email', $email)->find();
            
            if($data[0]['password'] == $pass) {
                return view('user/dash', $data[0]);
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

    public function regis() {
        
        $pass1 = $this->request->getVar("pass1");
        $pass2 = $this->request->getVar("pass2");

        if($pass1 == $pass2) {
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
}
