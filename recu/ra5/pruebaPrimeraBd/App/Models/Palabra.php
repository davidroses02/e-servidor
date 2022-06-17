<?php

use App\Models\DBAbstractModel;

require_once("DBAbstractModel.php");

class Palabra extends DBAbstractModel {

    private static $instancia;
    public static function getInstancia() {
        if (!self::$instancia) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }
    
    private $id;
    private $palabra;

    public function setId($id) {
        $this->id = $id;
    }

    public function setPalabra($palabra) {
        $this->palabra = $palabra;
    }
    
    public function get($id) {
        $this->query = "
            SELECT *
            FROM palabras
            WHERE id = :id
        ";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function set() {
        $this->query = "INSERT INTO palabras (palabra) VALUES (:palabra)";
        $this->parametros['palabra'] = $this->palabra;
        $this->get_results_from_query();
        //return "Datos insertados correctamente";
    }

    public function edit() {
        $this->query = "UPDATE palabras SET palabra = :palabra WHERE id = :id";
        $this->parametros['palabra'] = $this->palabra;
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
    }

    public function delete($id) {
        $this->query = "DELETE FROM palabras WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return "Datos eliminados correctamente";
    }


}

?>