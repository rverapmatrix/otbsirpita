<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario', 'password','nombre','apellidoPat','apellidoMat','rol','celular','direccion','estado'];


    public function getUsuario($usuarioEnviado){
        return $this->where('usuario',$usuarioEnviado)->first();
    }

    /*public function getIdUsuarioUltimo()
    {
        return $this->orderBy('idUsuario', 'DESC')->first();
    }*/


    
}

?>