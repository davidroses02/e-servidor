<?php 

require_once('DBAbstractModel.php');

class Usuarios extends DBAbstractModel {

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

    private $id;
    private $nombre;
    private $contrasena;
    private $perfil;

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setcontrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    public function set() {

    }

    public function get($id = "") {
        if ($id != '') {
            $this->query = "
            SELECT *
            FROM usuarios
            WHERE id = :id";
            //Cargamos los parámetros.
            $this->parametros['id'] = $id;
            //Ejecutamos consulta que devuelve registros.
            $this->get_results_from_query();
        }
        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad = $valor;
            }
            $this->mensaje = 'sh encontrado';
        } else {
            $this->mensaje = 'sh no encontrado';
        }
        return $this->rows;
    }

    public function edit() {

    }

    public function delete($id = "") {

    }

    // crear método login -> le paso usuario y contrasena
    // devuelve un array con el registro que coincide con la query
    // select * from usuarios where nombre = :nombre and contrasena = :contrasena,

    public function login($nombre = "", $contrasena = "") {
        $this->query = "
        SELECT *
        FROM usuarios
        WHERE nombre=:nombre AND 
        contrasena=:contrasena";
        $this->parametros['nombre'] = $nombre;
        $this->parametros['contrasena'] = $contrasena;
        $this->get_results_from_query();
        return $this->rows;
    }

}



?>