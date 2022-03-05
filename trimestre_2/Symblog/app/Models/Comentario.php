<?php

namespace App\Models;

require_once("DBAbstractModel.php");

class Comentario extends DBAbstractModel
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
    private $blog_id;
    private $user;
    private $comment;
    private $approved;
    private $created;
    private $updated_at;

    public function get($id = "")
    {
    }
    public function insert()
    {
    }
    public function set()
    {
    }
    public function update()
    {
    }
    public function read()
    {
    }
    public function readAll()
    {
    }
    public function edit()
    {
    }
    public function delete($id = "")
    {
    }
}
