<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PenggunaModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new PenggunaModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        //print_r($data);
        if ($data) {
            $pass = $data['password'];
            // $verify_pass = password_verify($password, $pass);
            $verify_pass = ($pass == $password) ? true : false;
            print_r($verify_pass);
            if ($verify_pass) {
                $ses_data = [
                    'username'     => $data['username'],
                    'nama_pengguna'     => $data['nama_pengguna'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                // return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            // return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
