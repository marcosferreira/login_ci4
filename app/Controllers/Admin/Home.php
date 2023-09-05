<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        echo '<h2> Usuário logado: '. $this->session->get('name') .'</h2>';
        echo '<a href="'.url_to('logout').'">Logout</a>';
        // return view('admin/home');
    }
}
