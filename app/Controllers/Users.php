<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function insert()
    {
        $data = [ 'name' => $this->request->getvar('username'),
                  'password' => $this->request->getvar('password'),
                  'confirmpassword' => $this->request->getvar('confirm-password')];
        $db= \Config\Database::Connected();
        $builder= $db->table('info');
        $builder->insert($data);
    }
}