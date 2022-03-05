<?php

namespace App\Models;

require_once("DBAbstractModel.php");

class Superheroe extends DBAbstractModel
{
    /*CONSTRUCCIÓN DEL MODELO SINGLETON*/
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
    private $velocidad;
    private $created_at;
    private $updated_at;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    //Con objetos
    public function setEntity()
    {
        $this->query = "INSERT INTO superheroes_tb(nombre, velocidad)
                        VALUES(:nombre, :velocidad)";
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['velocidad'] = $this->velocidad;
        $this->get_results_from_query();
        echo $this->mensaje = 'SH agregado correctamente';
    }

    public function getEntity($id)
    {
        $this->query = "SELECT nombre, velocidad, id FROM superheroes_tb WHERE id=:id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
        echo $this->mensaje = 'SH obtenidos correctamente';
    }

    public function deleteEntity($id)
    {
        $this->query = "DELETE FROM superheroes_tb WHERE id=:id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        echo $this->mensaje = 'SH eliminado correctamente';
    }

    public function editEntity()
    {
        $this->query = "UPDATE superheroes_tb SET nombre=:nombre WHERE id=:id";
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
        echo $this->mensaje = 'SH actulizado correctamente';
    }

    public function getAll()
    {
        $this->query = "SELECT nombre, velocidad, id FROM superheroes";
        $this->get_results_from_query();
        return $this->rows;
        echo $this->mensaje = 'SH obtenidos correctamente';
    }

    public function getByNombre($nombre)
    {
        $nombre = "%" . $nombre . "%";

        $this->query = "SELECT nombre, velocidad, id FROM superheroes_tb WHERE nombre LIKE :nombre";
        $this->parametros['nombre'] = $nombre;
        $this->get_results_from_query();
        return $this->rows;
        echo $this->mensaje = 'SH obtenidos correctamente';
    }

    public function getLastSh($numero = NUMEROSH)
    {
        $this->query = "SELECT nombre, velocidad, id FROM superheroes_tb ORDER BY id DESC LIMIT " . $numero;
        
        $this->get_results_from_query();
        return $this->rows;
        echo $this->mensaje = 'SH obtenidos correctamente';
    }
}