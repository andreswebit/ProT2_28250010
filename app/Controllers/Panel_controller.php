<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;

        $dato['titulo'] = 'panel del usuario';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('Back/usuario/usuario_logueado', $data);
        echo view('front/footer_view');
    }
}
