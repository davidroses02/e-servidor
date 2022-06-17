<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Pacientes extends DBAbstractModel {
    public $id;
    public $codigo_asegurado;
    public $usuarios_id;

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

    public function setCodigoAsegurado($codigo_asegurado){
        $this->codigo_asegurado = $codigo_asegurado;
    }

    public function setUsuariosId($usuarios_id){
        $this->usuarios_id = $usuarios_id;
    }

    public function getId(){
        return $this->id;
    }

    public function getCodigoAsegurado(){
        return $this->codigo_asegurado;
    }

    public function getUsuariosId(){
        return $this->usuarios_id;
    }

    public function setEntity() {}

    public function getEntity($id) {
        $this->query = "SELECT * FROM pacientes WHERE usuarios_id = :usuarios_id";
        $this->parametros['usuarios_id'] = $this->usuarios_id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function getEntityPaciente() {
        $this->query = "SELECT codigo_asegurado FROM pacientes WHERE usuarios_id = :usuarios_id";
        $this->parametros['usuarios_id'] = $this->usuarios_id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function deleteEntity($id) {}

    public function editEntity() {}

}



?>