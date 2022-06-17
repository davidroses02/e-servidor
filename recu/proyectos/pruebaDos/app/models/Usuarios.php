<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Usuarios extends DBAbstractModel {
    
    private $id;
    private $usuario;
    private $password;

    private static $instancia;
    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
    public function __clone()
    {
        trigger_error('La clonación no es permitida!.', E_USER_ERROR);
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    public function getId(){
        return $this->id;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getPassword(){
        return $this->password;
    }

    public function login() 
    {
        $this->query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";
        $this->parametros['usuario'] = $this->usuario;
        $this->parametros['password'] = $this->password;

        $this->get_results_from_query();
        if( count($this->rows) == 1 ){
            foreach ($this->rows[0] as $propiedad=>$valor) {
                $this->$propiedad=$valor;
            }
            $this->mensaje = 'Usuario encontrado';            
            $data['cuenta'] = $this->rows[0];
            $data['perfil'] = 'admin';
            $data['fecha'] = date('H:i:s');
            $data['usuario'] = $this->usuario;
        } else {
            echo "Usuario no encontrado";
        }
        if (isset($data['cuenta'])) {
            return $data??null;
        }
    }

    public function getEntity($id){}
    public function setEntity(){}
    public function editEntity(){}
    public function deleteEntity($id){}


}






?>