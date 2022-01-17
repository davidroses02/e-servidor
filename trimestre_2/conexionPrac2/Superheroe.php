<?php

//CONSTRUCCIÓN DEL MODELO SINGLETON//
require_once('DBAbstractModel.php');
class Superheroe extends DBAbstractModel
{

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
    private $capacidades;
    private $created_at;
    private $updated_at;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setCapacidades($capacidades)
    {
        $this->capacidades = $capacidades;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function set()
    {
        $this->query = "INSERT INTO superheroes(nombre, capacidades)
                        VALUES(:nombre, :capacidades)";
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['capacidades'] = $this->capacidades;
        $this->get_results_from_query();
        $this->mensaje = 'SH agregado correctamente';
    }
    /**
     * Método para traer un libro de la base de datos por clave primaria.
     * Carga los resultados en el array definido en la clase abstracta.
     *
     * @param int id. Identificador de la entidad.
     * @return datos.
     */
    public function get($id = '')
    {
        if ($id != '') {
            $this->query = "
            SELECT *
            FROM superheroes
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

    # filtro de búsqueda
    public function getByFilter($patronbusqueda = "") {
        $this->query = "
        select * from superheroes where nombre like :patronbusqueda
                ";
        $this->parametros['patronbusqueda'] = $patronbusqueda;
        $this->get_results_from_query();   
        return $this->rows;
        
    }
    # Modificar libro
    public function edit()
    {
        $this->query = "
                UPDATE superheroes
                SET nombre=:nombre,
                capacidades=:capacidades
                WHERE id = :id
                ";
        $this->parametros['id']= $this->id;
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['capacidades'] = $this->capacidades;
        $this->get_results_from_query();
        $this->mensaje = 'Éxito en la operación.';
    }

    # Eliminar un usuario
    public function delete($id = '')
    {
        $this->query = "DELETE FROM superheroes
WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        $this->mensaje = 'SH eliminado';
    }
    # Método constructor
    function __construct()
    {
        // Singleton no recomienda parámetros ya que
        // podría dificultar la lectura de las instancias.
    }
}
