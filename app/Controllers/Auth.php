<?php

namespace App\Controllers;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        if(session('id_login')) {
            return redirect()->to(site_url('dashboard'));
        }
        return view('auth/login');
    }

    public function loginProcess()
    {
        $users = new AuthModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $users->where([
            'username' => $username,
        ])->first();
        if($user) {
            if(password_verify($password, $user->password)) {
                $params = ['id_login' => $user->id_login];
                session()->set($params);
                return redirect()->to(site_url('dashboard'));
            } else {
                return redirect()->back()->with('error', 'Password Tidak Sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Username Tidak Ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('id_login');
        return redirect()->to(site_url('login'));
    }
}