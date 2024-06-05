<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    protected $usuarioModel;

    public function index()
    {
        return view('admin/view_usuarios');
    }

   

    public function principal(){
        return view('admin/view_principal_admin');
    }

    public function crear(){
        return view('admin/view_crear_usuario');
    }

    
    
}
