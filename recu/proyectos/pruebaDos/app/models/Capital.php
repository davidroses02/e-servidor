<?php 

namespace App\Models;
require_once("DBAbstractModel.php");


class Capital extends DBAbstractModel {
    public $id;
    public $word;

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

    public function getId(){
        return $this->id;
    }

    public function getWord(){
        return $this->word;
    }

    public function setWord($word){
        $this->word = $word;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function getLastWords()
    {
        $this->query = "SELECT id, palabra, created_at FROM palabras ORDER BY id DESC LIMIT 5";
        $this->get_results_from_query();
        return $this->rows;
        echo $this->mensaje = 'Palabras obtenidas correctamente';
    }
    
    public function setEntity(){
        $this->query = "INSERT INTO palabras(palabra)
                        VALUES(:word)";
        $this->parametros['word'] = $this->word;
        $this->get_results_from_query();
        echo $this->mensaje = 'Capital agregado correctamente';
    }
    
    public function editEntity() {
        $this->query = "UPDATE palabras SET palabra=:word WHERE id=:id";
        $this->parametros['word'] = $this->word;
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
        echo $this->mensaje = 'Capital editado correctamente';
    }
    
    public function deleteEntity($id) {
        $this->query = "DELETE FROM palabras WHERE id=:id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        echo $this->mensaje = 'Capital eliminado correctamente';
    }

    public function getEntity($id) {}

    public function getSearchWords() {
        $palabra = $this->word;
        $word = "%" . $palabra . "%";

        $this->query = "SELECT id, palabra, created_at FROM palabras WHERE palabra LIKE :palabra";
        $this->parametros['palabra'] = $word;
        $this->get_results_from_query();
        return $this->rows;
        echo $this->mensaje = 'SH obtenidos correctamente';
    }



}


?>