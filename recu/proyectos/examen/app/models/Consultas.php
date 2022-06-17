<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Consultas extends DBAbstractModel {
    public $id;
    public $medicos_id;
    public $pacientes_id;
    public $fecha_hora;
    public $diagnostico;
    public $observaciones;
    public $tratamiento;
    public $citas_id;

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

    public function setMedicosId($medicos_id){
        $this->medicos_id = $medicos_id;
    }

    public function setPacientesId($pacientes_id){
        $this->pacientes_id = $pacientes_id;
    }

    public function setFechaHora($fecha_hora){
        $this->fecha_hora = $fecha_hora;
    }

    public function setDiagnostico($diagnostico){
        $this->diagnostico = $diagnostico;
    }

    public function setObservaciones($observaciones){
        $this->observaciones = $observaciones;
    }

    public function setTratamiento($tratamiento){
        $this->tratamiento = $tratamiento;
    }

    public function setCitasId($citas_id){
        $this->citas_id = $citas_id;
    }

    public function getId(){
        return $this->id;
    }

    public function getMedicosId(){
        return $this->medicos_id;
    }

    public function getPacientesId(){
        return $this->pacientes_id;
    }

    public function getFechaHora(){
        return $this->fecha_hora;
    }

    public function getDiagnostico(){
        return $this->diagnostico;
    }

    public function getObservaciones(){
        return $this->observaciones;
    }

    public function getTratamiento(){
        return $this->tratamiento;
    }

    public function getCitasId(){
        return $this->citas_id;
    }

    public function setEntity() {
        $this->query = "INSERT INTO consultas (fecha_hora, pacientes_id, medicos_id, diagnostico, observaciones, tratamiento, citas_id) VALUES (:fecha_hora, :pacientes_id, :medicos_id, :diagnostico, :observaciones, :tratamiento, :citas_id)";
        $this->parametros['fecha_hora'] = $this->fecha_hora;
        $this->parametros['pacientes_id'] = $this->pacientes_id;
        $this->parametros['medicos_id'] = $this->medicos_id;
        $this->parametros['diagnostico'] = $this->diagnostico;
        $this->parametros['observaciones'] = $this->observaciones;
        $this->parametros['tratamiento'] = $this->tratamiento;
        $this->parametros['citas_id'] = $this->citas_id;
        $this->get_results_from_query();
    }

    public function getEntity($id) {}

    public function deleteEntity($id) {}

    public function editEntity() {}

}



?>