<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Models\AccionModel;

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

    public function mostrarRegistros()
    {
        
        $this->userModel = new UsuarioModel();
        $registros = $this->userModel->where('estado', 'activo')->findAll();
        
        $data['registros'] = $registros;
    // Resto del código para cargar la vista con los datos

      
        return view('admin/view_usuarios', $data);
    }

    public function agregarSocio(){
        return view('admin/view_crear_usuario');
        

    }

    public function insertSocio(){

        $this->userModel = new UsuarioModel(); //Modelo de usuario
        $this->accionModel = new AccionModel(); //Modelo de accion
        /**campos usuario*** */

        $nombre = $this->request->getPost("nombre");
        $apellidoPat = $this->request->getPost("apePat");
        $apellidoMat = $this->request->getPost("apeMat");
        $usuario = $this->request->getPost("usuario");
        $password = $this->request->getPost("passw");
        $rol = $this->request->getPost("rol");
        $celular = $this->request->getPost("celular");
        $direccion = $this->request->getPost("direccion");

        $dataUsuario = [
            'nombre'=>$nombre,
            'apellidoPat'=>$apellidoPat,
            'apellidoMat'=>$apellidoMat,
            'usuario'=>$usuario,
            'password'=>$password,
            'rol'=>$rol,
            'celular'=>$celular,
            'direccion'=>$direccion,
            'estado'=>'activo'
        ];

        $ultimoRegistro = $this->userModel->insert($dataUsuario); //insert en la tabla usuario

        
        /*obtenicion de valores de campos accion y despues realizamos el insert*/
        $tipoAccion = $this->request->getPost("tipoAccion");
        $costo = $this->request->getPost("costo");
        $nroMedidor = $this->request->getPost("nroMedidor");
        
        /*Datos de llave foranea*/
        /*$idUsuarioUlt=$this->userModel->getIdUsuarioUltimo();
        $idUsuarioUlt=$idUsuarioUlt['idUsuario'];  //para obtener el ultimo id de Usuario registrado
*/
        //echo $idUsuarioUlt;
       $dataAccion = [
            'tipoAccion'=>$tipoAccion,
            'costo'=>$costo,
            'nroMedidor'=>$nroMedidor,
            'estado'=>'activo',
            'Usuario_idUsuario'=>$ultimoRegistro
            
        ];

        $this->accionModel->insert($dataAccion); //insert a la tabla accion
        
        $mensaje = [
            'tipo'=>'success',
            'mensaje'=>'El registro se realizo de forma existosa!'
        ];

        return view('admin/view_crear_usuario',$mensaje);



    }

    
    
}
