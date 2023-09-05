<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data['msg'] = '';
        if ($this->request->getMethod() === 'post') {
            $userModel = model('UserModel');
            $userCheck = $userModel->check(
                $this->request->getPost('username'),
                $this->request->getPost('password')
            );

            if (!$userCheck) {
                $data['msg'] = 'Usuário e/ou senha incorretos';
            } else {
                //salva os dados na sessão
                $this->session->set('name', $userCheck->name);
                $this->session->set('profile', $userCheck->profile);

                //redireciona o usuário para a página restrita
                return redirect()->to('admin');
            }
        }


        return view('login', $data);
    }
}
