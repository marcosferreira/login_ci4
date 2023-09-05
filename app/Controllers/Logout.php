<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        //destruir a sessão (session) e voltar para o login
        $this->session->destroy();
        return redirect()->to('login');
    }
}
