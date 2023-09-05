<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo '<h1>Index de usuários!</h1>';
    }

    public function add()
    {
        echo '<h1>Adicionar usuários!</h1>';       
    }

    public function edit()
    {
        echo '<h1>Editar usuários</h1>';
    }
}
