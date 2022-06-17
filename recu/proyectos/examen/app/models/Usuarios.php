<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Usuarios extends DBAbstractModel {
    public $id;
    public $usuario;
    public $password;
    public $nombre;

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

    public function setNombre($nombre){
        $this->nombre = $nombre;
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

    public function getNombre(){
        return $this->nombre;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getAll() {
        $this->query = "SELECT * FROM usuarios";
        $this->get_results_from_query();
        return $this->rows;
    }

    public function login() {
        $this->query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";
        $this->parametros['usuario'] = $this->usuario;
        $this->parametros['password'] = $this->password;

        $this->get_results_from_query();
        if( count($this->rows) == 1 ){
            foreach ($this->rows[0] as $propiedad=>$valor) {
                $this->$propiedad=$valor;
            }
            $data['cuenta'] = $this->rows[0];
            $data['nombre'] = $this->rows[0]['nombre'];
            $data['id'] = $this->rows[0]['id'];
            $data['hora'] = date('H:i:s');
            $data['usuario'] = $this->usuario;
        } else {
            echo "Usuario no encontrado";
        }
        if (isset($data['cuenta'])) {
            return $data??null;
        }
    }
 
    public function setEntity() {
        $this->query = "INSERT INTO usuarios (usuario, password, nombre) VALUES (:usuario, :password, :nombre)";
        $this->parametros['usuario'] = $this->usuario;
        $this->parametros['password'] = $this->password;
        $this->parametros['nombre'] = $this->nombre;
        $this->get_results_from_query();
    }

    public function editEntity() {}

    public function deleteEntity($id) {}
    
    public function getEntity($id) {
        $this->query = "SELECT * FROM usuarios WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        if( count($this->rows) == 1 ) {
            foreach ($this->rows[0] as $propiedad=>$valor) {
                $this->$propiedad=$valor;
            }
            $this->mensaje = 'Usuario encontrado';
            return $this->rows[0];
        }
    }



    public function getLastId() {
        $this->query = "SELECT id FROM usuarios ORDER BY id DESC LIMIT 1";
        $this->get_results_from_query();
        if( count($this->rows) == 1 ) {
            return $this->rows[0]['id'];
        }
    }

}



?>