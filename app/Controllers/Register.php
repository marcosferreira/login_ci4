<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class Register extends BaseController
{
    public function index()
    {
        $data['msg'] = '';
        if ($this->request->getMethod() === 'post') {
            $userModel = model('UserModel');
            try {
                $userData = $this->request->getPost();
                $userData['profile'] = 'user';
                if ($userModel->save($userData)) {
                    $data['msg'] = 'Usuário criado com sucesso!';
                } else {
                    $data['msg'] = 'Usuário criado com sucesso!';
                    $data['errors'] = $userModel->errors();
                }
            } catch (Exception $e) {
                $data['msg'] = 'Usuário criado com sucesso!' . $e->getMessage();
            }
        }

        return view('register', $data);
    }
}
