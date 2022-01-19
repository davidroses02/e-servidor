<?php
namespace App\Models;

abstract class DBAbstractModel{
		
	private static $db_host = DBHOST;
    private static $db_user = DBUSER;
    private static $db_pass = DBPASS;
    private static $db_name = DBNAME;
    private static $db_port = DBPORT;

    protected $mensaje = "";
    protected $conn;

    protected $query;
    protected $rows = array();
    protected $parametros = array();

    abstract protected function get();
    abstract protected function set();
    abstract protected function edit();
    abstract protected function delete();

    protected function open_connection(){
        $dsn = 'mysql:host=' . self::$db_host . ';'
            . 'dbname=' . self::$db_name . ';'
            . 'port='  . self::$db_port;
        try {
            $this->conn = new PDO(
                $dsn,
                self::$db_user,
                self::$db_pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            return $this->conn;
        } catch (PDOException $e) {
            printf("Conexión fallida: %s\n", $e->getMessage());
            exit();
        }
    }

	/**
	 * Traer resultados de una consulta en un Array
	 * Consulta que devuelve tuplas de una tabla
	 *
	 * @return void
	 * @author yourname
	 */
	protected function get_results_from_query(){
        $this->open_connection();
        if (($_stmt = $this->conn->prepare($this->query))) {
            #PREG_PATTERN_ORDER flag para especificar como se cargan los resultados en $named.
            if (preg_match_all('/(:\w+)/', $this->query, $_named, PREG_PATTERN_ORDER)) {
                $_named = array_pop($_named);
                foreach ($_named as $_param) {
                    $_stmt->bindValue($_param, $this->parametros[substr($_param, 1)]);
                }
            }

            try {
                if (!$_stmt->execute()) {
                    printf("Error de consulta: %s\n", $_stmt->errorInfo()[2]);
                }

                $this->rows = $_stmt->fetchAll(PDO::FETCH_ASSOC);
                $_stmt->closeCursor();
            } catch (PDOException $e) {
                printf("Error en consulta: %s\n", $e->getMessage());
            }
        }
    }
	
	/**
	* Devuelve el último id introducido
	*
	* @return void
	* @author yourname
	*/
	public function lastInsert(){
        return $this->conn->lastInsertId();
    }

	/**
	 * Ejecuta un query simple del tipo INSERT, DELETE, UPDATE
	 * Consulta que no devuelve tuplas de la tabla
	 *
	 * @author Mb
	 */
	protected function executeSingleQuery(){
	
		if ($_POST) {
			$this->open_connection();
			print_r($this->query);
			$this->conn->query($this->query);
			self:$this->close_connection();

		} else {
			$this->mensaje = "Método no permitido";	
		}	
	}


	// Desconectar la base de datos
    private function close_connection()
    {
        $this->conn = null;
    }
}
