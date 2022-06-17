<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Especialidades extends DBAbstractModel {
    public $id;
    public $especialidad;

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

    public function setEspecialidad($especialidad){
        $this->especialidad = $especialidad;
    }   

    public function getEspecialidad($especialidad){
        return $this->especialidad;
    }  

    public function getId(){
        return $this->id;
    }

    //getAll
    public function getAll() {
        $this->query = "SELECT * FROM especialidades";
        $this->get_results_from_query();
        return $this->rows;
    }

    public function setEntity() {}

    public function getEntity($id) {}

    public function deleteEntity($id) {}

    public function editEntity() {}

}



?>