<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario', 'password','nombre','apellidoPat'];


    public function getUsuario($usuarioEnviado){
        return $this->where('usuario',$usuarioEnviado)->first();
    }
    
}

?>