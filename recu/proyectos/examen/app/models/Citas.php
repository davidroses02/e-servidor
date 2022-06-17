<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Citas extends DBAbstractModel {
    public $id;
    public $fecha_hora;
    public $pacientes_id;
    public $medicos_id;

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

    public function setFechaHora($fecha_hora){
        $this->fecha_hora = $fecha_hora;
    }

    public function setPacientesId($pacientes_id){
        $this->pacientes_id = $pacientes_id;
    }   

    public function setMedicosId($medicos_id){
        $this->medicos_id = $medicos_id;
    }

    public function getId(){
        return $this->id;
    }

    public function getFechaHora(){
        return $this->fecha_hora;
    }

    public function getPacientesId(){
        return $this->pacientes_id;
    }

    public function getMedicosId(){
        return $this->medicos_id;
    }

    public function setEntity() {}

    public function getEntity($id) {}

    public function deleteEntity($id) {}

    public function editEntity() {}

    public function getById_medico() {
        $this->query = "SELECT * FROM citas WHERE medicos_id = :medicos_id";
        $this->parametros['medicos_id'] = $this->medicos_id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function getById_paciente() {
        $this->query = "SELECT * FROM citas WHERE pacientes_id = :pacientes_id";
        $this->parametros['pacientes_id'] = $this->pacientes_id;
        $this->get_results_from_query();
        return $this->rows;
    }

}



?>