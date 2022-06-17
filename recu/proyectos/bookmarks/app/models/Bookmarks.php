<?php 

namespace App\Models;
require_once("DBAbstractModel.php");

class Bookmarks extends DBAbstractModel {
    public $id;
    public $bookmark;
    public $descripcion;
    public $id_usuario;

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

    public function getBookmark(){
        return $this->bookmark;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getIdUsuario(){
        return $this->id_usuario;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setBookmark($bookmark){
        $this->bookmark = $bookmark;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function setIdUsuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function getLastBookmarks() {
        $this->query = "SELECT * FROM bookmarks ORDER BY id DESC LIMIT 5";
        $this->get_results_from_query();
        return $this->rows;
    }

    public function setEntity() {
        $this->query = "INSERT INTO bookmarks(bookmark, descripcion, id_usuario)
                        VALUES(:bookmark, :descripcion, :id_usuario)";
        $this->parametros['bookmark'] = $this->bookmark;
        $this->parametros['descripcion'] = $this->descripcion;
        $this->parametros['id_usuario'] = $this->id_usuario;
        $this->get_results_from_query();
    }

    public function getEntity($id) {
        $this->query = "SELECT * FROM bookmarks WHERE id=:id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
    }
    
    public function editEntity() { 
        $this->query = "UPDATE bookmarks SET bookmark=:bookmark, descripcion=:descripcion, id_usuario=:id_usuario WHERE id=:id";
        $this->parametros['bookmark'] = $this->bookmark;
        $this->parametros['descripcion'] = $this->descripcion;
        $this->parametros['id_usuario'] = $this->id_usuario;
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
    }

    public function deleteEntity($id) {
        $this->query = "DELETE FROM bookmarks WHERE id=:id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
    }
    
}



?>