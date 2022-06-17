<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Medicos extends DBAbstractModel {
    public $id;
    public $usuarios_id;
    public $especialidades_id;

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

    public function setUsuariosId($usuarios_id){
        $this->usuarios_id = $usuarios_id;
    }

    public function setEspecialidadesId($especialidades_id){
        $this->especialidades_id = $especialidades_id;
    }   

    public function getId(){
        return $this->id;
    }

    public function getUsuariosId(){
        return $this->usuarios_id;
    }

    public function setEntity() {
        $this->query = "INSERT INTO medicos (usuarios_id, especialidades_id) VALUES (:usuarios_id, :especialidades_id)";
        $this->parametros['usuarios_id'] = $this->usuarios_id;
        $this->parametros['especialidades_id'] = $this->especialidades_id;
        $this->get_results_from_query();
    }

    public function getEntity($id) {
        $this->query = "SELECT * FROM medicos WHERE usuarios_id = :usuarios_id";
        $this->parametros['usuarios_id'] = $this->usuarios_id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function getEspecialidadesId($id) {
        $this->query = "SELECT especialidades_id FROM medicos WHERE id = :id";
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function getEspecialidad($id) {
        $this->query = "SELECT especialidad FROM especialidades WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function getIdUsuario($id) {
        $this->query = "SELECT usuarios_id FROM medicos WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function deleteEntity($id) {}

    public function editEntity() {}

}



?>